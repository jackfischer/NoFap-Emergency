const {Link, Suggestion, Log} = require('./db')

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
});

//TODO trigger to reload upon pg modification
