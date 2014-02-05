<?php

class usermanager extends Controller{
  public function add() {
    $name = filter_input(INPUT_POST, "nome");
    $model = new user_Model;
    $model->create($name, $name, $name);
    //header("location: /esnforum/usermanager");
  }
  
  public function delete($id) {
    $model = new user_Model;
    $model->deleteById($id);
    //header("location: /esnforum/usermanager");
  }
  
  public function loadAll() {
    $model = new user_Model;
    $model->loadAll();
  }
}
