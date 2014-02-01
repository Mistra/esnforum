<?php

class user_Model extends Model{
  
  private $id;
  private $name;
  private $surname;
  private $password;
  private $email;
  private $date;
  private $level;
  private $resetcode;
  
  public function __construct(){
    parent::__construct();
    echo "User::create";
  }
  public function loadById($id){
    $sql = "SELECT * FROM user
            WHERE id = ?";
    $query = $this->db->prepare($sql);
    $query->execute(array($id));
    $result = $query->fetchAll();
    if (count($result) == 1) {
      $result = array_pop($result);
      $this->name = $result["nick"];
    }
  }
  
  public function getName() {
    return $this->name;
  }
  
 public function __destruct(){
   echo "User::destroy";
 }
}
