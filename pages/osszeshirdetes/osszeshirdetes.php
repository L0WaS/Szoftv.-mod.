<?php
if (isset($_SESSION["login_nev"]) && $_SESSION["login_rang"]==1) {
?>
  <div ng-app="myApp" ng-controller="customersCtrl">
    <table>
      <tr ng-repeat="x in names">
        <td>{{ x.aru_nev }}</td>
        <td>{{ x.leiras }}</td>
        <td style="font-size:20px;"><button title="Törlés" type='button' ng-click='remove($index,x.aru_id);'><span class="glyphicon glyphicon-remove"></span></button></td>
      </tr>
    </table>

  </div>

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
} else if(isset($_SESSION["login_nev"]))
    echo "Admin rang szükséges!";    

  else 
    echo "Bejelentkezés szükséges!";
    
?>