<?php 
	include "../../alap/kapcsolat.php";
	//$bevitel1=$_POST["bevitel1"]; // felhn
	$bevitel2=$_POST["bevitel2"]; 
	$bevitel3=$_POST["bevitel3"]; 
	$bevitel4=$_POST["bevitel4"]; 
	$bevitel5=$_POST["bevitel5"]; 
	
	
$sql = "INSERT INTO aru
VALUES ( NULL, 6,'$bevitel4', '$bevitel2','$bevitel3','$bevitel5'); ";
$result = mysqli_query($conn, $sql);

$kimenet=0;
if ($result)
	$kimenet=1;

print $kimenet;
mysqli_close($conn);


?>
