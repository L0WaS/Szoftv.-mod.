<?php 
session_start();
include "../../alap/kapcsolat.php";
$szemely_elerhetoseg_valtoztatas=$_POST["szemely_elerhetoseg_valtoztatas"];
$felhasznalo_id=$_SESSION["login_id"];
$datumido=date("Y-m-d  H:i:s");

	$sql = "UPDATE szemely SET szemely_elerhetoseg = '$szemely_elerhetoseg_valtoztatas' WHERE szemely_id=$felhasznalo_id";
	$result = mysqli_query($conn, $sql);
	
	if ($result)
	{
		echo "Sikerült";
	}
	else
		echo "Hiba történt";

// print $kimenet;
mysqli_close($conn);

?>