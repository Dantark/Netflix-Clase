<?php 

require_once("../../../seguridad/netflix/class/screen.php");

/* session_name("SESSION");
session_cache_limiter('nocache');
session_start();

if(!isset($_SESSION['user'])){
    session_destroy();
    exit;
}else{
    $user=$_SESSION['user'];
} */

$screen = new Screen("../../../pantallas");

$screen->showScreen('index.tpl',$message);

