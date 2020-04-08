var express = require('express');
var app = express();
var serv = require('http').Server(app);

app.get('/',function(req, res) {
	res.sendFile(__dirname + '/client/index.php');
});
app.use('/client',express.static(__dirname + '/client'));

serv.listen(2000);
console.log("Server started.");

var SOCKET_LIST = {};

var Player = function (id) {
	var self = {};
	self.id = id;
	self.name = "" + Math.floor(10 * Math.random());
	self.floors = 5;
	self.protectFloors = 2;
	self.bricks = 20;
	self.brickInSec = 6;
	self.shells = 1;

	self.brickInSecFunction = function() {
		var briks = 5 + self.towers - self.protectTowers;
		self.brickInSec = briks;
		return briks;
	};

	Player.list[id] = self;
	return self;
};
Player.list = {};
Player.onConnect = function (socket) {
	var player = Player(socket.id);
	socket.on('buyShell',function () {

	});
	socket.on('buildFloor',function () {

	});
	socket.on('protectFloor',function () {

	});
};
Player.onDisconnect = function (socket) {
	delete Player.list[socket.id];
};
Player.sendBricks = function (socket) {
	var pack = [];
	for(var i in Player.list) {
		var player = Player.list[i];
		pack.push({
			bricks:player.brickInSecFunction(),
		});
	}
	return pack;
};

var DEBUG = true;

var io = require('socket.io') (serv, {});
io.sockets.on('connection', function (socket) {
	socket.id = Math.random();
	SOCKET_LIST[socket.id] = socket;

	Player.onConnect(socket);
	socket.on('disconnect',function () {
		delete SOCKET_LIST[socket.id];
		Player.onDisconnect(socket);

	});
	
	socket.on('sendMsgToServer', function (data) {
		var playerName = ("" + socket.id).slice(2,7);
		for(var i in SOCKET_LIST) {
			SOCKET_LIST[i].emit('addToChat',playerName + ': ' + data);
		}
	});
	
	socket.on('evalServer', function (data) {
		if (!DEBUG)
			return;
		
		var res = eval(data);
		socket.emit('evalAnswer',res)
	});
});



setInterval(function () {
	var pack = Player.sendBricks();

	for(var i in SOCKET_LIST) {
		var socket = SOCKET_LIST[i];
		socket.emit('newPosition', pack);
	}
},1000);

