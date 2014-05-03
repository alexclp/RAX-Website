'use strict';

angular.module('clapaApp')
  .controller('ContactController', function ($scope, $http) {
    $scope.formSubmitSuccess = false;
    $scope.showMessage = true;
    $scope.submitForm = function () {
      console.log($scope.form);
      $http.post('url').
        success(function() {
          $scope.formSubmitSuccess = true;
          $scope.showMessage = true;
        }).
        error(function() {
          $scope.formSubmitSuccess = false;
          $scope.showMessage = true;
        });
    };
    
  });
