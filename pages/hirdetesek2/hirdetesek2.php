<?php 
if (isset($_SESSION["login_nev"]))
{
?>
<!--<h1>Dolgozók:</h1>
<p>This is a paragraph.</p>-->

<div id="tablazat"></div>

<script src="pages/hirdetesek2/hirdetesek.js"></script>


<?php
}
else 
	echo "Hozzáférés megtagadva...";
?>
