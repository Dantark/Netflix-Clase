<?php
require_once("../../../seguridad/netflix/functions.php");
require_once("../../../seguridad/netflix/class/screen.php");

$screen = new Screen("../../../pantallas");
$screen->compile_check = true; 
/* $screen->caching = 1;
$screen->cache_lifetime = 300;
$screen->compile_check = true; */

$codFilm = $_POST['video'];
$film = getVideo($codFilm);
$screen->showScreenParameter('film.tpl', $film);


