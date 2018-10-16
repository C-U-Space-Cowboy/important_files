var events = require('events');
var EventEmitter = events.EventEmitter;
var util = require('util');

function Counter () {
	// call the EventEmitter constructor
	EventEmitter.call(this);
	var self = this;
	var count = 0;
	this.start = function () {
		this.emit('start');
		setInterval(function () {
			self.emit('count', count);
			count++;
		}, 1000);
	}
}

// setup inheritance: Counter inherits EventEmitter
util.inherits(Counter, EventEmitter);

module.exports.Counter = Counter;
