var eventObjects = require('./eventObjects.js');
var counter = new eventObjects.Counter();

counter.on('start', () => console.log("program has started!"));
counter.on('count', (counter) => console.log('counter = ' + counter));
counter.start(); // starts the program
