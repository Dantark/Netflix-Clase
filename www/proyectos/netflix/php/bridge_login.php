<?php
require_once("../../../../seguridad/netflix/functions.php");
require_once("../../../../seguridad/netflix/class/screen.php");

if(empty($_POST['user'])&&empty($_POST['psw'])){
    header("Location:../index.html");
}

$user = trim(strip_tags($_POST['user']));
$psw = trim(strip_tags($_POST['psw']));
$validation = validate($user, $psw);

if($validation){
    createSession($user);
    $validation = "Inicio de sesión correcto";
}

$screen = new Screen("../../../pantallas");

$screen->showScreen('index.tpl');




