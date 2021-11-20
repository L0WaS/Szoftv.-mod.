<?php 
session_start();
include "../../alap/kapcsolat.php";
$szemely_lakcim_valtoztatas=$_POST["szemely_lakcim_valtoztatas"];
$felhasznalo_id=$_SESSION["login_id"];
$datumido=date("Y-m-d  H:i:s");

// $sql = "select * from felh where $felhasznalo_id=felh_id ";
// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);
// echo "Hello World";

// if($row[""]==$felh_regijelszo)
// {
	$sql = "UPDATE szemely,felh SET szemely_lakcim = '$szemely_lakcim_valtoztatas' WHERE felh_szemelyid=szemely_id and felh_id=$felhasznalo_id";
	$result = mysqli_query($conn, $sql);
	
	if ($result)
	{
		echo "Sikerült";
	}
	else
		echo "Hiba történt a lakcimfelvitel.php-ban";
// }
// else
// {
	// $kimenet=2;
// }


// print $kimenet;
mysqli_close($conn);

?>