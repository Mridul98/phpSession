<?php
session_start();
$name;
$pass;

if(isset($_SESSION)){
$name = $_SESSION['name'];
$pass = $_SESSION['age'];
$dest = false;
if($_POST['log']=="true"){
    session_unset();
    session_destroy();
    echo "session destroyed";
    header('location: http://localhost/php session practice/login.html');
}
}else "you are not logged in";




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
        var logout = function(){
            var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
            }
        };
        xmlhttp.open("POST", "http://localhost/php session practice/profile.php?log=" + "true", true);
        xmlhttp.send();
        }
        
 
    </script>
</head>
<body>
    <h1 id = "name"><?php echo $name ?></h1>
    <h1 id ="pass"><?php echo $pass ?></h1>
    <button type = "submit" onclick = "logout()" >logout</button>
    
</body>
</html>