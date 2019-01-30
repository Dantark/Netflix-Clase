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

    public function showScreenMessage($screen,$messageValue){
        
        $this->assign("message", $messageValue);
        $this->display($screen);
    }
}