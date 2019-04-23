<?php


if(isset($_POST['name'],$_POST['username'],$_POST['matricule'],$_POST['password'])&&$_POST['name']=="name"&&$_POST['username']=="student"&&$_POST['matricule']=="ntic"&&$_POST['password']==12345678){
    session_start();
    foreach ($_POST as $indice=>$valeur){
        $_SESSION[$indice]=$valeur;
        setcookie($indice,$valeur,time()+60*60*24,"/",NULL,false,true);
    }
}else{
    header("Location:index.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>hello</h1>
</body>
</html>