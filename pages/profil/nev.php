<?php 
session_start();
include "../../alap/kapcsolat.php";
$szemely_nev_valtoztatas=$_POST["szemely_nev_valtoztatas"];
$felhasznalo_id=$_SESSION["login_id"];
$datumido=date("Y-m-d  H:i:s");


	$sql = "UPDATE szemely SET szemely_nev = '$szemely_nev_valtoztatas' WHERE szemely_id=$felhasznalo_id";
	$result = mysqli_query($conn, $sql);
	
	if ($result)
	{
		echo "Sikerült";
	}
	else
		echo "Hiba történt ";



// print $kimenet;
mysqli_close($conn);

?>