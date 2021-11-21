<?php 
include "../../alap/kapcsolat.php";
$data = json_decode(file_get_contents("php://input"));
$aruid = $data->aruid;


$sql2 = "DELETE FROM aru WHERE aru_id=$aruid ";
$result2 = mysqli_query($conn, $sql2);


if ($result)
	$kimenet=1;
else
	$kimenet=0;

print $kimenet;
mysqli_close($conn);



?>