var https = require('https'),
    fs = require('fs'),
    utillib = require('util');

var options = {
    key: fs.readFileSync('private_key.pem'),
    cert: fs.readFileSync('certificate.pem'),
    ca: [
        fs.readFileSync('ESTEID-SK 2007.PEM.cer'),
        fs.readFileSync('ESTEID-SK.PEM.cer'),
        fs.readFileSync('JUUR-SK.PEM.cer')
    ],
    requestCert: true,
    rejectUnauthorized: true
};

https.createServer(options, function (req, res) {
    res.setHeader("Content-type","text/plain; charset=utf-8");
    res.writeHead(200);
    res.end(utillib.inspect(req.connection.getPeerCertificate()));
}).listen(443);