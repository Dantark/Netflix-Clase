<?php

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
            return "Usuario no encontrado";
        }else if(password_verify($psw,$pswResult)){
            return true;
        }else if(!password_verify($psw,$pswResult)  ){
            return "Contraseña incorrecta";
        }
    }
    $connect->close();
}


function createSession($user){
    session_name("SESSION");
    session_cache_limiter("nocache");
    session_start($user);
    $_SESSION['user']=$user;
}

function deleteSession(){
    session_name("SESSION");
    session_cache_limiter('nocache');
    session_start(); 

    session_destroy();
    unset($_SESSION);
    header("Location: index.php");
    exit;
}

