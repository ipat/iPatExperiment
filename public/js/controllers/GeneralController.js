
var ipatApp = angular.module('ipatApp', ['ngRoute', 'ngAnimate']);

ipatApp.config(function($routeProvider) {
	$routeProvider
		.when('/', {
			templateUrl : 'pages/home.html',
			controller : 'mainController'
		})

		.when('/login', {
			templateUrl : 'pages/login.html',
			controller : 'loginController'
		});
});

ipatApp.controller('mainController', ['$scope', function($scope){
	$scope.message = "Hey how cool I am!";
}]);

ipatApp.controller('loginController', ['$scope', function($scope){
	$scope.message = "Test Login Page";
}]);