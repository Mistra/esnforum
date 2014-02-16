<?php

class register extends Controller {

  public function __construct() {
    parent::__construct();
    $this->model = new register_Model;
  }
  
  public function checkName() {
    $name = filter_input(INPUT_POST, "nome");
    $this->model->checkName($name);
  }
}
