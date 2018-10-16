var http = require('http');
var fs = require('fs');
var url = require('url');

var msg = require("./myModule.js");

var object = require("./myApp");
var url1 = "http://localhost:8080/filename.html?name=red&age=18";
object.info();

msg.print("Hello world");

http.createServer((request, response) => {
	var qs = url.parse(request.url, true);
	console.log("pathname: " + qs.search);
	var fileName = "." + qs.pathName;
	fs.readFile(fileName, (error, data) => {
		if (error) {
			response.writeHead(404, {'Content-Type': 'text/html'});
			return response.end("404 not found");
		}
		response.writeHead(200, {'Content-Type': 'text/html'});
		response.write(data);
	});
}).listen(8080, () => console.log("Server running on port 8080!"));
