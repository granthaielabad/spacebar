var http = require('http');
var url = require('url');
var fs = require('fs');
var path = require('path');

http.createServer(function (req, res) {
	var defENHtml = path.extname('.html');
	var defPath1 = path.dirname('K:\xampp\htdocs\spacebar\ca_request'+defENHtml+);
	res.writeHead(200, {'Content-Type': 'text/html'});
	res.write('Redirecting...');
	fs.readFile(defpath1, function(err, data) {
		res.writeHead(200, {'Content-Type': 'text/html'});
		res.write(data);
		res.end();
	});
}).listen(8080);

console.log('node K:/xampp/htdocs/spacebar/conn.js');
console.log('\nEstablished server connection successfully.');
console.log('\nServer running at http://localhost:8080/');