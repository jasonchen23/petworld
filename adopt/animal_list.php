<?php
require_once("../db_connect.php");
$sql="SELECT * FROM animal order by 'animal_id' DESC";
$result= $conn -> query($sql);
$data=$result->fetch_all();
echo json_encode($data,JSON_UNESCAPED_UNICODE);
?>
