<?php 
if (isset($_SESSION["login_nev"]))
{
?>
	

	<!--<span style="margin:10px">Üzenet szövege:</span>-->
   <div id="jatekhelye"></div>
  
  <br>
  
 <!--<input id="jelszofelvitelgomb" type="submit" value="Jelszó módosítása" style="margin:10px">
  <input id="lakcimfelvitelgomb" type="submit" value="Lakcím módosítása" style="margin:10px">-->
  <div id="hiba1"></div>
  

 
<script src="pages/profil/profil.js"></script> 
<?php
}
else 
	echo "Hozzáférés megtagadva...";
?>