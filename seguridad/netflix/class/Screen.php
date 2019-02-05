<?php

require_once("../../../phpapps/smarty/libs/Smarty.class.php");
class Screen extends Smarty{
    public function __construct($route){
        date_default_timezone_set('europe/madrid');
        parent::__construct();
        $this->template_dir=$route."/templates/";
        $this->compile_dir=$route."/templates_c/";
        $this->config_dir=$route."/configs/";
        $this->cache_dir=$route."/cache/";
    }
    public function showScreen($screen){
        $this->display($screen);
    }

<<<<<<< HEAD
<<<<<<< HEAD
    public function showScreenParameter($screen,$parameter){
        $this->assign("parameter", $parameter);
=======
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
    public function showScreenMessage($screen,$messageValue){
        
        $this->assign("message", $messageValue);
        $this->display($screen);
    }
    public function showMain($screen, $videos){
        $this->assign("videos", $videos);
<<<<<<< HEAD
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
=======
>>>>>>> 5ebd1770b0ae283d9e8c5a40ab4001db77b110d7
        $this->display($screen);
    }
}