<?php 
session_start();
include "../../alap/kapcsolat.php";
$felh_regijelszo=md5($_POST["felh_regijelszo"]);
$felh_ujjelszo=md5($_POST["felh_ujjelszo"]);
$felhasznalo_id=$_SESSION["login_id"];
$datumido=date("Y-m-d  H:i:s");

$sql = "select * from szemely where $felhasznalo_id=szemely_id ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if($row["szemely_jelszo"]==$felh_regijelszo)
{
	$sql = "UPDATE szemely SET szemely_jelszo = '$felh_ujjelszo' WHERE szemely_id=$felhasznalo_id ";
	
	
	$result = mysqli_query($conn, $sql);
	if ($result)
		$kimenet=1;
	else
		$kimenet=0;
}
else
{
	$kimenet=2;
}


print $kimenet;
mysqli_close($conn);

?>