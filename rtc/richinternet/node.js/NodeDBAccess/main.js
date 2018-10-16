var mysql = require('mysql');
var express = require('express');

// a web server app
var app = express();

// connection object

var conObj = {
	host: 'localhost',
	username: 'root',
	password: '',
	database: 'testdb'
};

// create a connection object
var con = mysql.createConnection(conObj);

// connect
con.connect((err) => {
	if (err) {
		console.log("error connection to DB.")
		return;
	};
	console.log("Connection established!");
});

con.end((err) => {
	// closes connection
});
