<?php

class category_View extends View {

  public function __construct() {
    parent::__construct();
    $this->thread = new thread_Model;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function getId() {
    return $this->id;
  }
}
