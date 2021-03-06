var app = angular.module("app", ["ngCookies"]);

app.factory("CategoryService", function($http) {
  return {
    "getCategories": function() {
      return $http.get("/category/index");
    }
  };
});

app.factory("ProductService", function($http) {
  return {
    "getProducts": function() {
      return $http.get("/product/index");
    }
  };
});

app.factory("BasketService", function($cookies) {

  var products = JSON.parse($cookies.products || "[]");

  return {

    "getProducts" : function() {
      return products;
    },

    "add" : function(product) {

      products.push({
        "id"       : product.id,
        "name"     : product.name,
        "price"    : product.price,
        "total"    : product.price * 1,
        "quantity" : 1
      });

      this.store();
    },

    "remove" : function(product) {

      for (var i = 0; i < products.length; i++) {

        var next = products[i];

        if (next.id == product.id) {
          products.splice(i, 1);
        }

      }
      
      this.store();

    },

    "update": function() {

      for (var i = 0; i < products.length; i++) {

        var product = products[i];
        var raw     = product.quantity * product.price;

        product.total = Math.round(raw * 100) / 100;

      }

      this.store();

    },

    "store" : function() {
      $cookies.products = JSON.stringify(products);
    },

    "clear" : function() {
      products.length = 0;
      this.store();
    }

  };

});


app.controller("products", function($scope, CategoryService, ProductService,
  BasketService) {
  
  var self = this;

  var categories = CategoryService.getCategories();
  
  categories.success(function(data) {
    self.categories = data;
  });

  var products = ProductService.getProducts();

  products.success(function(data) {
    self.products = data;
  });

  this.category = null;

  this.filterByCategory = function(product) {
  	
  	if (self.category !== null) {
  		return product.category.id == self.category.id;
  	}

  	return true;
  };

  this.setCategory = function(category) {
  	self.category = category;
  };

  this.addToBasket = function(product) {
    BasketService.add(product);
  };

  $scope.products = this;

});

app.controller("main", function($scope){

});

app.controller("basket", function($scope, BasketService) {

  var self = this;

  this.products = BasketService.getProducts();

  this.update = function() {
    BasketService.update();
  };

  this.remove = function(product) {
    BasketService.remove(product);
  };

	$scope.basket = this;
});

