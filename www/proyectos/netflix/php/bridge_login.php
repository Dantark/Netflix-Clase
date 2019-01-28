<?php
include "../../../../seguridad/netflix/functions.php";

if(empty($_POST['user'])&&empty($_POST['psw'])){
    header("Location:../index.html");
}

$user = trim(strip_tags($_POST['user']));
$psw = trim(strip_tags($_POST['psw']));
$validation = validate($user, $psw);

if($validation){
    echo "Funsiono";
}



