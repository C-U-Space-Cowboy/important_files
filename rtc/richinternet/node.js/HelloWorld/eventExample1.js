var fs = require('fs');

var rs = fs.createReadStream("./myFile.html");

rs.on('open', () => console.log("file is open!"));
