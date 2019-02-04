<?php
require_once("../../../seguridad/netflix/functions.php");
require_once("../../../seguridad/netflix/class/screen.php");

$screen = new Screen("../../../pantallas");
$codFilm = $_POST['video'];
$film = getVideo($codFilm);
$screen->showMain('film.tpl', $film);