<?php
require_once("../db_connect.php");

// $id=$_POST["id"];
$email=$_POST["email"];
$password=md5($_POST["password"]);

$sql="UPDATE user SET password='$password' where email='$email'";
if ($conn->query($sql) === TRUE) {
    echo "更新密碼成功";
    // echo "id : $id";
    echo "email : $email";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
};

$conn->close();
// header("location: ./userinfo.php?id=$id");
?>