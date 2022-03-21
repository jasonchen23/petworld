<?php
session_start();
unset($_SESSION["user"]);
echo "Log out";
// header("location: ./login.php")
?>