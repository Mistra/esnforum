<?php

class login extends Controller {

  public function __construct() {
    parent::__construct();
    $model = get_class($this) . "_Model";
    $this->model = new $model;
  }

  public function input() {
    $this->model->login($_POST['Nome'], $_POST['Password']);
    header("location: /esnforum/index");
  }
  
  public function logout() {
    $this->model->logout();
    header("location: /esnforum/index");
  }
}
