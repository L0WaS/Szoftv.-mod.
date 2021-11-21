<?php
session_start(); 
include "../../alap/kapcsolat.php";
$loginid=$_SESSION["login_id"];

$sql2 = "SELECT * FROM szemely where szemely_id=$loginid ";
$result2 = mysqli_query($conn, $sql2);	

// echo "Login id:".$loginid.", ";
$kimenet=array();
if (mysqli_num_rows($result2) > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result2)) {
        array_push($kimenet,$row);
	}
	
	print json_encode($kimenet);
	
} else {
    print "HIBA A LEKERDEZ.PHP-BAN";
	
}

mysqli_close($conn);
?>