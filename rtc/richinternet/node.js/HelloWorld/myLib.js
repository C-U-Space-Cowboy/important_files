function add() {
	console.log("function add");
}

function multiply() {
	console.log("function multiply");
}

function divide() {
	console.log("function divide");
}

// exports.add = add;
// exports.multiply = multiply;
// exports.divide = divide;

// exports.func1 = function() {

// };

module.exports = {func2: add, multiply, divide};
