var http = require('http');
var url = require('url');

http.createServer(function (req, res) {
	var s = " ";
	var uParser = url.parse(req.url, true).query;
	var msg = uParser.username + s + uParser.password + s + uParser.passwordver + s + uParser.email;
	res.end(msg);
}).listen(8080);