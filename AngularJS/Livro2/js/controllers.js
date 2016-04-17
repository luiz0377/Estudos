'use strict';

/* Controllers */

var helloWorldControllers = angular.module('helloWorldControllers', []);

helloWorldControllers.controller('MainCtrl', ['$scope', '$location', '$http',
    function MainCtrl($scope, $location, $http) {
        $scope.message = "olá";
    }]);



helloWorldControllers.controller('CustomerCtrl', ['$scope',

    function CostumerCtrl($scope){
       $scope.customerName = "Luiz Henrique";
       $scope.customerNumber = "24";

       $scope.changerCostumer = function(){
       $scope.customerName = $scope.cName;
       $scope.customerNumber = $scope.cNumber

         };
    }]);

helloWorldControllers.controller('ShowCtrl', ['$scope', '$location', '$http',
    function ShowCtrl($scope, $location, $http) {
        $scope.message = "Show The World";
    }]);

helloWorldControllers.controller('AddCustomerCtrl', ['$scope', '$location',
    function AddCustomerCtrl($scope, $location) {
        $scope.submit = function(){
            $location.path('/addedCustomer/' + $scope.cName + "/" + $scope.cCity);
        };
    }]);

helloWorldControllers.controller('AddedCustomerCtrl', ['$scope', '$routeParams',
    function AddedCustomerCtrl($scope, $routeParams) {
        $scope.customerName = $routeParams.customer;
        $scope.customerCity = $routeParams.city;
    }]);


