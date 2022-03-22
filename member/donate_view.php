<?php
require_once('../db_connect.php');
$user_id=$_POST['user_id'];
$sql = "SELECT donate_id,dog,puppy,cat,kitty,shelter FROM donate WHERE 'user_id'='$user_id'";
$result= $conn -> query($sql);
$data=$result->fetch_all(MYSQLI_ASSOC);
echo json_encode($data);
?>