var myObj = {
	printUrl: function (request) {
		console.log(require('url').parse(request.url, true));
	}
};

module.exports = myObj;

// create a simple module with an object containing functions
// and its job is to print the content of the url
