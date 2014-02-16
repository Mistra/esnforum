<?php

class usermanager_View extends View {

  public function __construct() {
    parent::__construct();
    $this->user = new user_Model;
    $this->users = R::findAll("user");
  }
}
