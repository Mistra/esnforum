<?php

class login extends Controller{
  public function __construct() {
    parent::__construct();
  }
  
  public function input(){
    echo $_POST['Nome'];
    echo $_POST['Password'];
    //$this->view->render();
  }
}

