const {Link, Suggestion, Log} = require('./db')
const express = require('express')

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

function nocache(req, res, next) {
  res.header('Cache-Control', 'private, no-cache, no-store, must-revalidate');
  res.header('Expires', '-1');
  res.header('Pragma', 'no-cache');
  next();
}

app.get('/', nocache, function (req, res) {
  res.header('Access-Control-Allow-Origin', '*');
  const religious = req.query.religious == true
  const category = req.query.cat ? req.query.cat : "em"
  const candidates = linkcache[religious][category]
  res.send(candidates[Math.floor(Math.random() * candidates.length)])
})

// app.get('/db', nocache, function (req, res) {
//   res.header('Access-Control-Allow-Origin', '*');
//   const religious = req.query.religious == true
//   const category = req.query.cat ? req.query.cat : "em"
//   Link.findOne().then((data) => res.send(data.url))
// })

app.get('/noop', function(req,res) {
  res.send("hello world");
})

app.listen(3000, () => console.log('App is listening'))
//TODO do logging correctly
//TODO integrate sentry
