<?php

class Controller {
  
  public function __construct() {
    //require "views/".get_class($this).".php";
    $class = get_class($this)."_View";
    $this->view = new $class;
  }
  
  public function index() {
    $this->view->render();
  }
  
}
