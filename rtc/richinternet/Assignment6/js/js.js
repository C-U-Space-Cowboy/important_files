angular.module('myModule', []).filter('uppercase', function () {
	return function (input) {
		return input.toUpperCase();
	};
}).controller('myController', ['$scope', 'uppercaseFilter', function ($scope, uppercaseFilter) {
	$scope.groceries = [
		{
			category: 'Dairy',
			item: 'Ice Cream',
			price: 4.95
		}, {
			category: 'Produce',
			item: 'Bananas',
			price: 5.95
		}, {
			category: 'Condiment',
			item: 'Chocolate Syrup',
			price: 3.99
		}, {
			category: 'Grain',
			item: 'Tortilla Chips',
			price: 7.97
		}, {
			category: 'Produce',
			item: 'Shredded Cheese',
			price: 4.90
		}, {
			category: 'Produce',
			item: 'Lettuce',
			price: 2.70
		}, {
			category: 'Produce',
			item: 'Tomato',
			price: 0.70
		}, {
			category: 'Grain',
			item: 'Croutons',
			price: 3.95
		}
	];

	$scope.changeGroceryCategory = function () {
		$.each($scope.groceries, function () {
			this.category = "Organic";
			this.price *= 1.20;
		});
	}

	$scope.usertext = {storename: "Costco"};
}]);
