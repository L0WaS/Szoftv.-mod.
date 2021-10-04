<?php

include "../../alap/kapcsolat.php"; 
 
$bevitel1=$_POST['bevitel1']; 
$sql = "SELECT szemely_felh FROM szemely where szemely_id=$bevitel1";
//$sql = "SELECT * FROM szemely where szemely_id=6";
$result = mysqli_query($conn, $sql);

$kimenet=array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //echo $result;
		
		array_push($kimenet,$row);
	}
	print json_encode($kimenet);
} else {
    print 0;
}

mysqli_close($conn);
?> 