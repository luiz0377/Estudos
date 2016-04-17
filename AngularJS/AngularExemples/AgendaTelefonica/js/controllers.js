'use strict';

/* Controllers */

var listaTelefonicaControllers = angular.module('listaTelefonicaControllers', []);


listaTelefonicaControllers.controller('MainCtrl', ['$scope', '$location', '$http',
     function MainCtrl($scope, $location, $http) {
         $scope.message = "olá";
         $scope.app = "Lista Telefonica";
         $scope.contatos = [];
         $scope.adicionarContato = function (contato) {
             $scope.contatos.push(angular.copy(contato));
         };
         $scope.apagarContatos = function (contatos) {
             $scope.contatos = contatos.filter(function (contato) {
                 if (!contato.selecionado) return contato;
             });
         };
         $scope.isContatoSelecionado = function (contatos) {
             return contatos.some(function (contato) {
                 return contato.selecionado;
             });
         };
         $scope.operadoras = [
             {nome: "Oi", codigo: 14, categoria: "Celular"},
             {nome: "Vivo", codigo: 15, categoria: "Celular"},
             {nome: "Tim", codigo: 41, categoria: "Celular"},
             {nome: "GVT", codigo: 25, categoria: "Fixo"},
             {nome: "Embratel", codigo: 21, categoria: "Fixo"},
         ];
     }]);


listaTelefonicaControllers.controller('ShowCtrl', ['$scope', '$location', '$http',
    function ShowCtrl($scope, $location, $http) {
        $scope.message = "Show The World";
    }]);
