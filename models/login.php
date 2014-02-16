<?php

class login_Model{  
  public function login($name, $password){
    $password = sha1($password);
    $user = R::find('user', 'name = ? AND password = ?',
            array($name, $password));   
    if ($user != NULL) {
      Session::logged(true);
      Session::id($user->id);
      Session::name($user->name);
      Session::email($user->email);
      Session::level($user->level);
      return true;
    }    
    return false;
  }
  
  public function logout() {
    Session::destroy();
  }
}

