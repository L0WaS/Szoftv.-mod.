<?php 
if (isset($_SESSION["login_nev"]))
{
?>
	

	<!--<span style="margin:10px">Üzenet szövege:</span>-->
   <div id="jatekhelye"></div>
  
  <br>
  

  <div id="hiba1"></div>
  

 
<script src="pages/profil/profil.js"></script> 
<?php
}
else 
	echo "Hozzáférés megtagadva...";
?>