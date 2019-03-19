<?php
$name = $_POST["Username"];
$pass = $_POST["Password"];


if($name=="mridul" && $pass == "halo"){
    session_start();
    $_SESSION['name'] = "mahmud un nabi mridul";
    $_SESSION['age'] = "20";
    echo "this is login.php";
    header('location: http://localhost/php session practice/profile.php');
    
}
else echo "session not started";



?>