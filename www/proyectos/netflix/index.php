<<<<<<< HEAD
<<<<<<< HEAD
<?php 

require_once("../../../seguridad/netflix/class/screen.php");

$screen = new Screen("../../../pantallas");
$screen->compile_check = true; 
$screen->showScreenParameter('index.tpl',"");


/* if ('GET' == $_SERVER['REQUEST_METHOD']) {
    //display view
 }
 else if ('POST' == $_SERVER['REQUEST_METHOD']) {
    //process input
    //update session
    header('Location: /next/page/to/view', true, 303);
 } */
=======
<?php 

require_once("../../../seguridad/netflix/class/screen.php");

$screen = new Screen("../../../pantallas");

$screen->showScreenMessage('index.tpl',"");

>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
<?php 

require_once("../../../seguridad/netflix/class/screen.php");

$screen = new Screen("../../../pantallas");

$screen->showScreenMessage('index.tpl',"");

>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
