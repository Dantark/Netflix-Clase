<?php
require_once("../../../seguridad/netflix/class/Video.php");
function connectBD(){
    require_once "netflixbd.php";
    $connect = new mysqli(IP,USER,PSW,BD);
    if($connect->connect_error){
        die('Error de Conexión ('.$connect->connect_errno.')'.$connect->connect_error);
    }
    return $connect;
}

function validate($user, $psw){
    $connect = connectBD();
    $query = $connect->prepare("select clave from usuarios where dni=?");
    if($query){
        $query->bind_param("s",$userQuery);
        $userQuery = $user;

        $query->execute();
        $query->bind_result($pswResult);
        $query->fetch();
        $query->close();
        $connect->close();
        if(is_null($pswResult)){
            return "Usuario o contraseña incorrecta";
        }else if(password_verify($psw,$pswResult)){
            return true;
        }else if(!password_verify($psw,$pswResult)  ){
            return "Usuario o contraseña incorrecta";
        }
    }
    $connect->close();
}


function createSession($user){
    session_name("SESSION");
    session_cache_limiter("nocache");
    session_start();
    $_SESSION['user']=$user;
}

function deleteSession($screen){
    session_cache_limiter('nocache');
    session_start(); 

    session_destroy();
    unset($_SESSION);
    $screen->showScreenMessage('index.tpl',"");
    exit;
}

function getProfiles($user){
    $connect = connectBD();
    $query = $connect->prepare("select codigo_perfil from perfil_usuario where dni=?");
    $query->bind_param("s",$userQuery);
    $userQuery = $user;
    $profiles = array();
    $query->execute();
    $query->bind_result($profileResult);
    while($query->fetch()){
        array_push($profiles, $profileResult);
    }
    $query->close();
    $connect->close();
    return $profiles;
}

function getVideosMain(){
    $user = $_SESSION['user'];

    $profiles = getProfiles($user);
    $videos = array();

    foreach ($profiles as $profile) {
        $connect = connectBD();
        $query = $connect->prepare("select codigo, cartel from videos where codigo_perfil=?");
        $query->bind_param("s",$profileQuery);
        $profileQuery = $profile;
        $query->execute();
        $query->bind_result($codResult, $posterResult);
        while($query->fetch()){
            array_push($videos, new Video($codResult,$posterResult));
        }
        $query->close();
        $connect->close();
    }
    return $videos;
}
function getVideo($cod){
    $connect = connectBD();
    $query = $connect->prepare("select * from videos where codigo=?");
    $query->bind_param("s",$codQuery);
    $codQuery = $cod;
    $query->execute();
    $query->bind_result($codResult, $titleResult, $posterResult, $downloadableResult, $codProfileResult, $synopsisResult, $videoResult);
    $query->fetch();
    $video = new Video($codResult, $titleResult, $posterResult, $downloadableResult, $codProfileResult, $synopsisResult, $videoResult);
    $query->close();
    $connect->close();
    return $video;
}
