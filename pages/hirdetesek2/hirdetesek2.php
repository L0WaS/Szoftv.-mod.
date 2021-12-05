<?php 
if (isset($_SESSION["login_nev"]))
{
?>
<center><div class="menucim">Hirdetések</div></center>
<center><div id="tablazat"></div></center>

<script src="pages/hirdetesek2/hirdetesek.js"></script>


<?php
}
else 
	echo "Hozzáférés megtagadva...";
?>
