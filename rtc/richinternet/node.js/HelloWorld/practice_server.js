var http = require('http');
var url = require('url');

var object = require("./practice");

http.createServer((request, response) => {
	object.printUrl(request);
}).listen(8080, () => console.log("Server running on port 8080!"));
