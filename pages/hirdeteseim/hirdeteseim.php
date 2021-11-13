<div ng-app="myApp" ng-controller="customersCtrl">
<table>
  <tr ng-repeat="x in names">
    <td>{{ x.aru_nev }}</td>
    <td>{{ x.leiras }}</td>
  </tr>
</table>

</div>

<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
  $http.get("pages/hirdeteseim/lekerdez.php")
  .then(function (response) {$scope.names = response.data;});
});
</script>