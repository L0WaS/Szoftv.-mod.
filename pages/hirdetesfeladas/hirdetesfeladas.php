<?php 
if (isset($_SESSION["login_nev"]))
{
?>
<body>
<center style="color: #757575;font-size: 200%;font-family: 'Open Sans';margin-top: 20px;">Hirdetésfeladás</center>
<hr>
<div style="color: #000000;" class="row">
	
	<div class="row">
		<div class="col-sm-6">
			<center>
				<div>Cím<br><input style="width:50%" type="text" id="bevitel2" class="szovegmezo"></div>
				<div style="margin-top:30px">Leírás<br><input style="width:50%" type="text" id="bevitel3" class="szovegmezo"></div>
				
			</center>
		</div>
		<div class="col-sm-6">
			<center>
				<!--<div style="margin-top:30px">Kép beszúrás:<br><input style=" margin-top: 10px; margin-bottom: 10px; " type="file" id="bevitel9" name="bevitel9"></div>-->
				<div>Hirdetésben megjelenő név<br><input style="width:50%" type="text" id="bevitel4" class="szovegmezo"></div>
				<div style="margin-top:30px">Elérhetőség<br><input style="width:50%" type="text" id="bevitel5" class="szovegmezo"></div>
				
				
				 <input style="margin-top:30px" type="submit" value="Véglegesítés" id="gomb">

				  <div id="siker"></div>
				
				
				
			</center>
		</div>
		</div>
	
</div>


<script src="pages/hirdetesfeladas/hirdetesfeladas.js"></script> 

</body>
<?php
}
else 
	echo "Bejelentkezés szükséges!";
?>



