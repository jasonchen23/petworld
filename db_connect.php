<?php
$servername = "127.0.0.1";
$username= "jason";
$password= "1234";
$dbname = "petworld";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// 檢查連線
if ($conn->connect_error) {
  	die("連線失敗: " . $conn->connect_error);
}else {
    echo "success";
}
?>
