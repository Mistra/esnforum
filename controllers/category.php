<?php

class category extends Controller{
  
  public function index($id=0) {
    $this->view->render("category", $id);
  }
}
