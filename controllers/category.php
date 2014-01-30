<?php

class category extends Controller{
  
  public function index($id=0) {
    $this->view->setId($id);
    $this->view->render();
  }
}
