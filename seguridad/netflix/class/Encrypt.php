<?php
class Encrypt(){
    private $key;
    private $route;
    public function __construct($key, $route){
        $this->key=$key;
        $this->route=$route;
    }

    public function encrypt(){
        mcrypt_encrypt ( string $cipher , string $key , string $data , string $mode [, string $iv ] ) : string
    }

    public function desencrypt(){
       
    }
}