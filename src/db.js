//Create and verify database connection

const Sequelize = require('sequelize');
const connection_string = "postgresql://postgres@pg:5432/postgres"
const sequelize = new Sequelize(connection_string)
//const sequelize = new Sequelize(
//  'jack', '', '', //no username or password
//  {
//    host: 'pg',
//    dialect: 'postgres',
//    logging: false,
//    freezeTableName: true,
//    operatorsAliases: false
//  }
//  );

sequelize
  .authenticate()
  .then(() => {
    console.log('Connection has been established successfully.');
  })
  .catch(err => {
    console.error('Unable to connect to the database:', err);
  });

module.exports.Link = sequelize.define('link', {
  url: {
    type: Sequelize.STRING,
    allowNull: false,
    unique: "url-religious"
  },
  religious: {
    type: Sequelize.BOOLEAN,
    allowNull: false,
    defaultValue: false,
    unique: "url-religious"
  },
  em: { type: Sequelize.INTEGER, allowNull: false, defaultValue: 0 },
  rel: { type: Sequelize.INTEGER, allowNull: false, defaultValue: 0 },
  dep: { type: Sequelize.INTEGER, allowNull: false, defaultValue: 0 },
  rej: { type: Sequelize.INTEGER, allowNull: false, defaultValue: 0 },
  down: {
    type: Sequelize.BOOLEAN,
    allowNull: false,
    defaultValue: false
  }
});
module.exports.Link.sync()

module.exports.Log = sequelize.define('log', {
  ip: {
    type: Sequelize.STRING,
    allowNull: false
  },
  url: {
    type: Sequelize.STRING,
    allowNull: false
  },
  platform: {
    type: Sequelize.STRING,
  },
  category: {
    type: Sequelize.STRING,
    allowNull: false,
  },
  religious: {
    type: Sequelize.BOOLEAN,
    allowNull: false,
  },
});
module.exports.Log.sync()

module.exports.Suggestion = sequelize.define('suggestion', {
  ip: {
    type: Sequelize.STRING,
    allowNull: false
  },
  url: {
    type: Sequelize.STRING,
    allowNull: false
  },
  comment: {
    type: Sequelize.STRING,
    allowNull: false
  }
});
module.exports.Suggestion.sync()

