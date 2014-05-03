'use strict';

angular.module('clapaApp')
  .controller('ContactController', function ($scope, $http) {
    $scope.submitForm = function () {
      console.log($scope.form);
      var url = '/contact.php?first_name=' + $scope.form.firstName +
        '&last_name=' + $scope.form.lastName +
        '&email=' + $scope.form.email +
        '&subject=' + $scope.form.subject +
        '&subject=' + $scope.form.message;
      $http.post(url).
        success(function() {
          $scope.formSubmitSuccess = true;
          $scope.formShowMessage = true;
        }).
        error(function() {
          console.log("error");
          $scope.formSubmitSuccess = false;
          $scope.formShowMessage = true;
        });
    };
    
  });
