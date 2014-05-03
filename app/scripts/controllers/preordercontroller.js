'use strict';

angular.module('clapaApp')
  .controller('PreorderController', function ($scope, $http) {
    $scope.submitForm = function () {
      var request = {
        'fullName' : $scope.form.firstName + $scope.form.lastName ,
        'email' : $scope.form.email ,
        'makeName' : $scope.form.carMaker ,
        'payment' : $scope.form.paymentMethod ,
        'address' : $scope.form.fullAdress ,
        'zip' : $scope.form.zip ,
        'city' : $scope.form.city ,
        'country' : $scope.form.country
      };
      var params = Object.keys(request).map(function(k) {
        return encodeURIComponent(k) + '=' + encodeURIComponent(request[k]);
      }).join('&');
      var url = '/preoder.php?' + params;
      console.log(url);
      $http.post(url).
        success(function() {
          $scope.formSubmitSuccess = true;
          $scope.formShowMessage = true;
        }).
        error(function() {
          console.log('error');
          $scope.formSubmitSuccess = false;
          $scope.formShowMessage = true;
        });
    };
  });
