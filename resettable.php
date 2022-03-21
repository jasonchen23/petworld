<?php
require_once('./db-connect.php');
$sql="truncate table user;";
$result=$conn->query($sql);
$data=$result->fetch_all();
echo "reset success";
?>