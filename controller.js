var teamControllers = angular.module('teamControllers', []);

teamControllers.controller('DetailsController', ['$scope','$http', '$routeParams', function ($scope, $http, $routeParams) {
  $http.get("data.json").success(function(data){  
   $scope.player = data; 
   $scope.whichItem = $routeParams.itemId;

  });
 
}]);

teamControllers.controller('ListController', ['$scope','$http', '$routeParams', function ($scope, $http, $routeParams) {
  $http.get("real.json").success(function(data){  
   $scope.player	 = data; 
   $scope.whichItem = $routeParams.item;

  });
 
}]);


