'use strict';

angular.module('clapaApp')
  .controller('MainCtrl', function ($scope) {
    $scope.slides = [
      {
        mainText:'RAX - Your Personal Car Assistant',
        text: 'All your car information available on your iPhone. For cars from 2006 until now.',
        image:'images/carousel-1.png'
      },
      {
        mainText:'All of you car related to dos in one place.',
        text:'You can create reminders and to dos of things you want to do for your car. All in just one place!',
        image:'images/carousel-2.png'
      },
      {
        mainText:'Never forget where you parked your car.',
        text:'RAX offers you the possibility to remember your parking spot and give you direction when in doubt.',
        image:'images/carousel-3.png'
      },
      {
        mainText:'Do you have a problem with your car and you don\'t know what it is? Rax is here to help you!',
        text:'An error code database is available just at your fingertips. Tap you code to search for an error or let the app do it for you.',
        image:'images/carousel-4.png'
      }
    ];
  });
