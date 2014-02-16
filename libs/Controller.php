<?php

class Controller {
  
  public function __construct() {
    Session::init();
    R::setup('mysql:host=localhost;dbname=my_skullolo',
            'skullolo','');
    R::freeze(true);
    $view = get_class($this) . "_View";
    $this->view = new $view;
  }
  
  public function index() {
    $this->view->render();
  } 
}
