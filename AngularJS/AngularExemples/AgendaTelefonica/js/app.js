'use strict';

/*App Module*/

var listaTelefonicaApp = angular.module('listaTelefonicaApp',[
    'ngRoute',
    'listaTelefonicaControllers'
]);

/*Define Router
* */
listaTelefonicaApp.config(['$routeProvider', '$locationProvider',
    function($routeProvider, $locationProvider) {
        $routeProvider.
        when('/', {
            templateUrl: 'partials/main.html',
            controller: 'MainCtrl'
        }).when('/show', {
            templateUrl: 'partials/show.html',
            controller: 'ShowCtrl'
        });
        $locationProvider.html5Mode(false).hashPrefix('!');
    }]);
