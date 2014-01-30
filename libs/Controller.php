<?php

class Controller {
  
  public function __construct() {
    Session::init();
    $view = get_class($this) . "_View";
    $this->view = new $view;
  }
  
  public function index() {
    $this->view->render();
  } 
}
