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
      .when('/contact',{
        templateUrl: 'views/contact.html',
        controller: 'ContactController'
      })
      .when('/tour',{
        templateUrl: 'views/tour.html',
        controller: 'TourController'
      })
      .when('/preorder',{
        templateUrl: 'views/preorder.html',
        controller: 'PreorderController'
      })
      .otherwise({
        redirectTo: '/'
      });

  });
