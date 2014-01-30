<?php

class login_Model extends Model {
  public function __construct() {
      parent::__construct();
  }
  
  public function login($name, $password){
    $password = sha1($password);
    $sql = "SELECT * FROM user 
              WHERE nick = ? AND pass = ?";
    $query = $this->db->prepare($sql);
    $query -> execute(array($name, $password));
    if ($query -> rowCount() == 1) {
      Session::set("dummy");
      /*
      $user = $query->fetch();
      $_SESSION['logged'] = true;
      $_SESSION['name'] = $user['nick'];
      $_SESSION['id'] = $user['id'];
      $_SESSION['level'] = $user['level'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['date'] = $user['date'];
      */
      return true;
    }    
    return false;
  }
  
  public function logout() {
    Session::destroy();
  }
}

