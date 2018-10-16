var events = require('events');
var eventEmitter = new events.EventEmitter();

// listen to the csi250 event
eventEmitter.on('csi250', (mesObject) => 
	console.log(mesObject.message + " from " + mesObject.teacher));

// Fire the csi250 event
eventEmitter.emit("csi250", {message: 'last week of class', teacher: 'mohammed'});

var counter = 0;

setInterval(function () {
	eventEmitter.emit('count', counter);
	counter++;
}, 1000); // timing that executes the function every second

eventEmitter.on('count', () => console.log('counter = ' + counter));
