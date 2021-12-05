<?php 
if (isset($_SESSION["login_nev"]))
{
?>
	
  <center><div class="menucim">Adatok módosítása</div></center>
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