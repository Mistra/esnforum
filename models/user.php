<?php

class user_Model {
  
  public function create($name, $password, $email) {
    $user = R::dispense('user');
    $user->name = $name;
    $user->password = $password;
    $user->email = $email;
    $id = R::store($user);
    echo json_encode( array('name' => $name, 'id' => $id) );
  }
  
  public function create($name, $password, $password2, $email) {
    $user = R::dispense('user');
    $user->name = $name;
    $user->password = $password;
    $user->email = $email;
    $id = R::store($user);
    echo json_encode( array('name' => $name, 'id' => $id) );
  }

  public function deleteById($id) {
    $user = R::load('user', $id);
    R::trash( $user );
  }
}
