//Create and verify database connection

const Sequelize = require('sequelize');
const sequelize = new Sequelize(
  'jack', '', '', //no username or password
  {
    host: 'localhost',
    dialect: 'postgres',
    logging: false,
    freezeTableName: true,
    operatorsAliases: false
  }
  );

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
    allowNull: false
  },
  religious: {
    type: Sequelize.BOOLEAN,
    allowNull: false,
  }
});

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

//call Model.sync() to add table

