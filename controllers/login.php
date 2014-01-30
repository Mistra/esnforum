<?php

class login extends Controller {

  public function __construct() {
    parent::__construct();
    $model = get_class($this) . "_Model";
    $this->model = new $model;
  }

  public function input() {
    $name = filter_input(INPUT_POST, "Nome",
            FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "Password",
            FILTER_SANITIZE_SPECIAL_CHARS);
            
    $this->model->login($name, $password);
    header("location: /esnforum/index");
  }
  
  public function logout() {
    $this->model->logout();
    header("location: /esnforum/index");
  }
}
