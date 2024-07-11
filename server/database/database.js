const mysql = require('mysql');
require('dotenv').config();

function createConnection() {
  const connection = mysql.createConnection({
    host: process.env.DB_HOST,
    user: process.env.DB_USER,
    password: process.env.DB_PASSWORD,
    database: process.env.DB_NAME,
    port: process.env.DB_PORT
  });

  connection.connect((err) => {
    if (err) {
      console.error('Error conectando a la base de datos: ', err);
      return;
    }
  });

  return connection;
}

module.exports = {
  createConnection
};
