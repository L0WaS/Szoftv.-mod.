

var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
    $http.get("pages/dolgozok_torlese/lekerdez.php")
    .then(function (response) {$scope.names = response.data.records;});

	alert ($scope.names);
});

