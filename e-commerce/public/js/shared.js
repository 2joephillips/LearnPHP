var app = angular.module("app",["ngCookies"]);

app.controller("main", function($scope){
	console.log("main.init");
	this.shared = "hello world";
	$scope.main = this;
});

app.controller("products", function($scope){
	console.log("products.init", $scope.main.shared);

	$scope.products = this;
});

app.controller("basket", function($scope){
	console.log("basket.init:", $scope.main.shared);

	$scope.basket = this;
});


