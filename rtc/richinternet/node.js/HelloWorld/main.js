// create a http object
var http = require('http');

http.createServer((request, response) => {
	// callback code
	response.writeHead(200, 
		{'Content-Type': 'text/plain'}
	);
	response.end("<h1>Hello World</h1>");
}).listen(3000);

console.log("Server running on port 3000...");
