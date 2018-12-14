var myApp = angular.module('myApp', ['ngRoute', 'teamControllers']);

myApp.config(['$routeProvider', function($routeProvider) {
  $routeProvider.
  when('/list/:item', {
    templateUrl: 'views/list.html',
    controller: 'ListController'
  }).
   when('/details/:itemId', {
    templateUrl: 'views/details.html',
    controller: 'DetailsController'
	
  }).
  otherwise({
    redirectTo: '/'
  });
}]);
