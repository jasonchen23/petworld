<?php
require_once('../db_connect.php');
// $donate_id = $_POST["donate_id"];
$user_id=$_POST["user_id"];
$dog=$_POST["dog"];
$puppy=$_POST["puppy"];
$cat=$_POST["cat"];
$kitty=$_POST["kitty"];
$shelter=$_POST["shelter"];
$sql="INSERT INTO donate (user_id,dog,puppy,cat,kitty,shelter)
VALUES ('$user_id','$dog','$puppy','$cat','$kitty','$shelter')";
if ($conn->query($sql) === TRUE) {
    echo "donate Success";
    $last_id = $conn -> insert_id;
    echo "id : $last_id" ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
};
$conn->close();
// $result=$conn->query($sql);
// $data=$result->fetch_all();
?>