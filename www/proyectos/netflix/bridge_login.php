<<<<<<< HEAD
<?php
require_once("../../../seguridad/netflix/functions.php");
require_once("../../../seguridad/netflix/class/screen.php");

$screen = new Screen("../../../pantallas");

if(empty($_POST['user'])&&empty($_POST['psw'])){
    $screen->showScreenMessage('index.tpl',"Campos Vacios");
    exit;
}

$user = trim(strip_tags($_POST['user']));
$psw = trim(strip_tags($_POST['psw']));
$validation = validate($user, $psw);

if($validation==1){
    
    createSession($user/* , $profiles */);
    $videos = getVideosMain();
    /* print_r($videos); */
    /* echo var_dump($videos); */
    $screen->showMain('main.tpl', $videos);
}else{
    $screen->showScreenMessage('index.tpl', $validation);
}







=======
<?php
require_once("../../../seguridad/netflix/functions.php");
require_once("../../../seguridad/netflix/class/screen.php");

$screen = new Screen("../../../pantallas");

if(empty($_POST['user'])&&empty($_POST['psw'])){
    $screen->showScreenMessage('index.tpl',"Campos Vacios");
    exit;
}

$user = trim(strip_tags($_POST['user']));
$psw = trim(strip_tags($_POST['psw']));
$validation = validate($user, $psw);

if($validation==1){
    
    createSession($user/* , $profiles */);
    $videos = getVideosMain();
    /* print_r($videos); */
    /* echo var_dump($videos); */
    $screen->showMain('main.tpl', $videos);
}else{
    $screen->showScreenMessage('index.tpl', $validation);
}







>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
