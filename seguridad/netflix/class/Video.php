<?php

class Video{
    public $cod;
    public $title;
    public $poster;
    public $downloadable;
    public $codProfile;
    public $synopsis;
    public $video;

    function __construct() {
        $argv = func_get_args();
        switch(func_num_args()){
            case 2:
                self::__construct1($argv[0], $argv[1]);
            break;
            case 7:
                self::__construct2($argv[0], $argv[1], $argv[2], $argv[3], $argv[4], $argv[5], $argv[6]);
            
        }
    }
    
    function __construct1($cod, $poster) {
        $this->cod = $cod;
        $this->poster = $poster;
    }
    
    function __construct2($cod, $title, $poster, $downloadable, $codProfile, $synopsis, $video){
        $this->cod = $cod;
        $this->title = $title;
        $this->poster = $poster;
        $this->downloadable = $downloadable;
        $this->codProfile = $codProfile;
        $this->synopsis = $synopsis;
        $this->video = $video;
    }
}

