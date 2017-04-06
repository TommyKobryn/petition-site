var app = angular.module('petitionSite', []);

app.controller('mainController', function($scope , $http, $log){

    $http.get('/new-working-backend/public/api/petitions')
    .then(function success(response) {
    $scope.petitions = response.data;
  //  $scope.counter = petitions.length;
  //  console.log(counter);
});

    $scope.quantity = 5;


});
