<?php
if (isset($_SESSION["login_nev"])) {
?>
<style>
table, th , td  {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd) {
  background-color: #7ea4c95c;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
<center><div class="menucim">Hirdetéseim</div></center>
  <center><div ng-app="myApp" ng-controller="customersCtrl">
    <table>
      <tr ng-repeat="x in names | filter:{ szemely_id: <?php echo $_SESSION["login_id"]; ?> } ">
        <td>{{ x.aru_nev }}</td>
        <td>{{ x.leiras }}</td>
        <td style="font-size:20px;"><button title="Törlés" type='button' ng-click='remove($index,x.aru_id);'><span class="glyphicon glyphicon-remove"></span></button></td>
      </tr>
    </table>

  </div></center>

  <script>
    var app = angular.module('myApp', []);
    app.controller('customersCtrl', function($scope, $http) {
      $http.get("pages/hirdeteseim/lekerdez.php")
        .then(function(response) {
          $scope.names = response.data;
        });

      $scope.remove = function(index, aruid) {
        if (confirm("Biztos, hogy törölni akarod?")) {
          //alert(index+" "+ aruid)
          
          $http({
            method: 'post',
            url: 'pages/hirdeteseim/torles.php',
            data: {
              aruid: aruid
            },
          }).then(function successCallback(response) {
            $scope.adatok.splice(index, 1);
          });
          location.reload();
        }
      }
      
    });


    
  </script>
<?php
} else
  echo "Bejelentkezés szükséges!";
?>