const {Link, Suggestion, Log} = require('./db')
const express = require('express')
const cloudflare = require('cloudflare-express');
const Recaptcha = require('express-recaptcha');
const {recaptcha_secret} = require('./secrets')


// Load in-memory copy of links
const categories = ['em', 'rel', 'dep', 'rej'];
const cat_o = {}
categories.forEach(cat => cat_o[cat] = []);
const linkcache = {true: cat_o, false: {...cat_o}};
Link.findAll().then(rows => {
  rows.forEach((row) => {
    categories.forEach(category => {
      Array.from(Array(row[category])).forEach(() => {
        linkcache[row.religious][category].push(row.url)
      });
    });
  });
  console.log("Loaded link cache successfully")
});
//TODO trigger to reload upon pg modification


const app = express()
app.use(cloudflare.restore());

function nocache(req, res, next) {
  res.header('Cache-Control', 'private, no-cache, no-store, must-revalidate');
  res.header('Expires', '-1');
  res.header('Pragma', 'no-cache');
  next();
}

function getlinkdata(req) {
  const religious = req.query.religious == true
  const category = req.query.cat ? req.query.cat : 'em'
  const candidates = linkcache[religious][category]
  const url = candidates[Math.floor(Math.random() * candidates.length)]
  return {religious, category, url, platform: req.query.platform, ip: req.cf_ip}
}

app.get('/director.php', nocache, function(req, res) {
  res.header('Access-Control-Allow-Origin', '*');
  response_data = getlinkdata(req)
  res.send(response_data.url)
  Log.create(response_data) //TODO append to an in memory queue
  // process.nextTick(() => Log.create(response_data));
});

app.get('/mobileapi.php', nocache, function (req, res) {
  response_data = getlinkdata(req)
  res.send(response_data.url)
  Log.create(response_data)
})

const recaptcha = new Recaptcha("6LcboPoSAAAAAIH6t90C3ppYFQUnNLdvZwGc-eA3", recaptcha_secret);
app.get('/thankyou.php', nocache, recaptcha.middleware.verify, function(req, res) {
  if (!req.recaptcha.error) {
    Suggestion.create({
      'url': req.query.link,
      'comment': req.query.message,
      'ip': req.cf_ip
    });
    res.json({"status":"success"})
  } else {
    res.status(401).json({"status": "error"})
  }
});

app.get('/noop', function(req,res) {
  res.send("hello world");
})

app.listen(3000, () => console.log('App is listening'))
//TODO do logging correctly
//TODO integrate sentry














