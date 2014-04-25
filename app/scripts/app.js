'use strict';

angular
  .module('clapaApp', [
    'ngCookies',
    'ngResource',
    'ngSanitize',
    'ngRoute',
    'ui.bootstrap'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.html',
        controller: 'MainCtrl'
      })
      .when('/faq',{
        templateUrl: 'views/faq.html',
        controller: 'FaqController'
      })
      .otherwise({
        redirectTo: '/'
      });

  });
