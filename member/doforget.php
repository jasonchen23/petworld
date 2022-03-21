<?php
require_once('../db_connect.php');
$account=$_POST["account"];
$sql="SELECT * FROM user WHERE account='$account'";
if($conn -> query($sql) == TRUE) {
    $result = $conn->query($sql);
    $userCount=$result->num_rows;

    if($userCount>0) {
        echo "success";
        $user=$result->fetch_assoc();
        $data=[
            "account"=>$user["account"]
        ];
        $_SESSION["user"]=$data;
        unset($_SESSION["error"]);
        var_dump($_SESSION["user"]);
        // header("location: ./dashboard.php");
    } else {
        echo "failed";
        if(isset($_SESSION["error"]["times"])){
            $_SESSION["error"]["times"]++ ;
        } else{
            $_SESSION["error"]["times"]=1;
        }
        $_SESSION["error"]["message"]="帳號或密碼錯誤";
    };
    // header("location: ./login.php");
} else{
    echo "Error: ". $conn->error;
}
?>
