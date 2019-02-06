<?php 

require_once("../../../seguridad/netflix/class/screen.php");

$screen = new Screen("../../../pantallas");
$screen->compile_check = true; 
$screen->showScreenParameter('index.tpl',"");




