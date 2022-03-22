<?php
require_once('../db_connect.php');
// $donate_id = $_POST["donate_id"];
$user_id=$_POST["user_id"];
$animal_id=$_POST["animal_id"];
$sql="INSERT INTO adopt (user_id,animal_id)
VALUES ('$user_id','$animal_id')";
if ($conn->query($sql) === TRUE) {
    echo "adopt Success";
    $last_id = $conn -> insert_id;
    echo "id : $last_id" ;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
};
$conn->close();
// $result=$conn->query($sql);
// $data=$result->fetch_all();
?>