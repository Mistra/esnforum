<?php

class register_Model {

  public function checkName($name) {
    $user = R::find('user', 'name = ?', array($name));
    if ($user != NULL) {
      echo json_encode(array('name' => "found"));
    } else {
      echo json_encode(array('name' => "not found"));
    }
  }

}
