<?php

class History extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('history/history');
    }

    
}
