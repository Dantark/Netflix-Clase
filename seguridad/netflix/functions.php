<?php

function connectBD(){
    require_once("netflixbd.php");
    $connect = new mysqli("IP","USER","PSW","BD");
    if($connect->connect_error){
        die('Error de Conexión ('.$connect->connect_errno.')'.$connect->connect_error);
    }
    return $connect;
}

function validate($user, $psw){
    $connect = connectBD();
    $validation = true;
    return $validation;
}

