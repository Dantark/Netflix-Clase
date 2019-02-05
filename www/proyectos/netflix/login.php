<?php
require_once("../../../seguridad/netflix/functions.php");
require_once("../../../seguridad/netflix/class/screen.php");

$screen = new Screen("../../../pantallas");

if(empty($_POST['user'])&&empty($_POST['psw'])){
    header("Location: index.php");
    exit;
}

$user = trim(strip_tags($_POST['user']));
$psw = trim(strip_tags($_POST['psw']));
$validation = validate($user, $psw);

if($validation==1){
    createSession($user);
    /* echo var_dump($videos); */
    header("Location: main.php");
}else{
    $screen->showScreenParameter('index.tpl', $validation);
}