<?php
if (isset($_SESSION["login_nev"]) && $_SESSION["login_rang"] == 1) {
?>

  <body>
  
    <div ng-app="myApp" ng-controller="customersCtrl">

      
      <center>
        <div style="overflow-x:auto;">
          <table style="margin:20px;font-family:Times New Roman;line-height: normal;">
           
            <th>
              Név
            </th>
            <th>
              Leírás
            </th>
            

             
            <tr ng-repeat="x in names">
              <td>{{ x.aru_nev }}</td>
              <td>{{ x.leiras }}</td>
              

              <!--<td style="font-size:20px;"><button class="torlesgomb" title="Törlés" type='button' ng-click='remove($index,x.aru_id);'><span class="glyphicon glyphicon-remove"></span></button></td>-->
            </tr>

          </table>
        </div>
      </center>

      


    </div>

    <script src="pages/dolgozok_torlese/dolgozok_torlese.js"></script>



  </body>
<?php
} else
  echo "Hozzáférés megtagadva...";
?>