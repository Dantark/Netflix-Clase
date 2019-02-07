<?php
require_once("../../../seguridad/netflix/class/screen.php");
require_once("../../../seguridad/netflix/class/videoStream.php");

$video = $_GET['video'];
echo $video;
$stream = new VideoStream("../../../videos/".$video);
$stream->start();
