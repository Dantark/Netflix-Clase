<?php
require_once("../../../seguridad/netflix/functions.php");
require_once("../../../seguridad/netflix/class/screen.php");

$screen = new Screen("../../../pantallas");
$screen->compile_check = true; 

session_name("SESSION");
session_cache_limiter('nocache');
session_start();

if(!isset($_SESSION['user'])){
    session_destroy();
    unset($_SESSION);
    header("Location: index.php");
    exit;
}else{
    $videos = getVideosMain();
    $screen->showScreenParameter('main.tpl', $videos);
}