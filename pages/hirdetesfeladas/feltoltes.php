<?php 
	session_start(); 
	include "../../alap/kapcsolat.php";
	$loginid=$_SESSION["login_id"];
	
	$bevitel2=$_POST["bevitel2"]; 
	$bevitel3=$_POST["bevitel3"];
	$bevitel6=$_POST["bevitel6"]; 
	
	
$sql = "INSERT INTO aru
VALUES ( NULL, $loginid, '$bevitel2','$bevitel3','$bevitel6'); ";
$result = mysqli_query($conn, $sql);

$kimenet=0;
if ($result)
	$kimenet=1;

print $kimenet;
mysqli_close($conn);


?>
