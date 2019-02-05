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

<<<<<<< HEAD
<<<<<<< HEAD
function deleteSession(){
    session_name("SESSION");
=======
function deleteSession($screen){
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
function deleteSession($screen){
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
    session_cache_limiter('nocache');
    session_start(); 

    session_destroy();
    unset($_SESSION);
<<<<<<< HEAD
<<<<<<< HEAD
    header("Location: index.php");
=======
    $screen->showScreenMessage('index.tpl',"");
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
    $screen->showScreenMessage('index.tpl',"");
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
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
<<<<<<< HEAD
<<<<<<< HEAD
    $found = false;
    foreach ($profiles as $profile) {
        $connect = connectBD();
        $query = $connect->prepare("select videos.codigo, videos.cartel, tematica.descripcion from videos, tematica, asociado 
        where videos.codigo = asociado.codigo_video and asociado.codigo_tematica = tematica.codigo and codigo_perfil=? order by videos.titulo");
        $query->bind_param("s",$profileQuery);
        $profileQuery = $profile;
        $query->execute();
        $query->bind_result($codResult, $posterResult, $tematicResult);
        
        while($query->fetch()){
            $found = false;
            foreach($videos as &$video){
                if($video['cod']==$codResult){
                    $video['tematic']=$video['tematic'].'/'.$tematicResult;
                    $found = true;
                }
            }
            if(!$found){
                array_push($videos, array('cod'=>$codResult, 'poster'=>$posterResult, 'tematic'=>$tematicResult));
            }  
        }
        
       
        

=======
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7

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
<<<<<<< HEAD
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
        $query->close();
        $connect->close();
    }
    return $videos;
}
function getVideo($cod){
    $connect = connectBD();
<<<<<<< HEAD
<<<<<<< HEAD
    $query = $connect->prepare("select titulo, cartel, descargable, sinopsis, video from videos where codigo=?");
    $query->bind_param("s",$codQuery);
    $codQuery = $cod;
    $query->execute();
    $query->bind_result($titleResult, $posterResult, $downloadableResult, $synopsisResult, $videoResult);
    $video = array();
    $query->fetch();
    
    
    $video["title"] = $titleResult;
    $video["poster"] = $posterResult;
    $video["downld"] = $downloadableResult;
    $video["synopsis"] = $synopsisResult;
    $video["video"] = $videoResult;

=======
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
    $query = $connect->prepare("select * from videos where codigo=?");
    $query->bind_param("s",$codQuery);
    $codQuery = $cod;
    $query->execute();
    $query->bind_result($codResult, $titleResult, $posterResult, $downloadableResult, $codProfileResult, $synopsisResult, $videoResult);
    $query->fetch();
    $video = new Video($codResult, $titleResult, $posterResult, $downloadableResult, $codProfileResult, $synopsisResult, $videoResult);
<<<<<<< HEAD
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
    $query->close();
    $connect->close();
    return $video;
}
<<<<<<< HEAD
<<<<<<< HEAD

/* select videos.codigo, videos.cartel, tematica.descripcion
from videos, tematica, asociado
where 
videos.codigo = asociado.codigo_video and
asociado.codigo_tematica = tematica.codigo and 
codigo_perfil="P1" 
order by titulo; */

/* select codigo, cartel, from videos where codigo_perfil=? order by titulo */
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
