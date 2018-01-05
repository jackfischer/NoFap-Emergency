const {Link, Suggestion, Log} = require('./db')
const csv = require("fast-csv");

function load_legacy_csv() {
  const data = {true: {}, false: {}};
  csv.fromPath('/Users/jack/Downloads/links.csv')
  .on("data", (row) => {
    const religious = row[3] == '1'
    const link = row[2]
    data[religious][link] = data[religious][link] || {em: 0, rel: 0, dep: 0, rej: 0};
    data[religious][link][row[1]]++;
  })
  .on("end", () => {
    Object.keys(data).forEach(religious => {
      Object.keys(data[religious]).forEach(url => {
        const link = {...data[religious][url], religious, url}
        console.log(link)
        Link.create(link);
      })
    })
  });
}
load_legacy_csv()