<?php 
if (isset($_SESSION["login_nev"]))
{
?>

<div id="tablazat"></div>

<script src="pages/hirdetesek2/hirdetesek.js"></script>


<?php
}
else 
	echo "Hozzáférés megtagadva...";
?>
