angular.module("groceryList", []).controller("formController", ['$scope', '$http', ($scope, $http) => {
	$http.get("js/groceries.json").success(function (response) {
		$scope.groceries = response;
	});
	$scope.showList = false;
}]);
