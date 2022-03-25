<?php
require_once('../db_connect.php');
$account = $_POST["account"];
$password=md5($_POST["password"]);
$email=$_POST["email"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$job=$_POST["job"];
$age=$_POST["age"];
$sql="SELECT * FROM user WHERE email='$email'";
// echo $sql;
if($conn -> query($sql) == TRUE) {
    $result = $conn->query($sql);
    $userCount=$result->num_rows;

    if($userCount>0) {
        echo "email has been registered";
    }else{
        $sql="INSERT INTO user (account,password,email,phone,address,job,age,valid)
        VALUES ('$account','$password','$email','$phone','$address','$job','$age',1)";
        if ($conn->query($sql) === TRUE) {
            echo "Signup Success";
            $last_id = $conn -> insert_id;
            echo "id : $last_id" ;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        };
    }}
$conn->close();
// $result=$conn->query($sql);
// $data=$result->fetch_all();
?>