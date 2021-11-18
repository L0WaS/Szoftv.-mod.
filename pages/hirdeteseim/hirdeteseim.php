<?php
if (isset($_SESSION["login_nev"])) {
?>
<div ng-app="myApp" ng-controller="customersCtrl">
<table>
  <tr ng-repeat="x in names | filter:{ szemely_id: <?php echo $_SESSION["login_id"]; ?> } "> 
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
<?php
}
else 
	echo "Bejelentkezés szükséges!";
?>