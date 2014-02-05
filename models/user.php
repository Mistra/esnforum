<?php

class user_Model extends Model {

  public function __construct() {
    parent::__construct();
  }

  public function loadAll() {
    $sql = "SELECT name, id FROM user ORDER BY id";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
//echo json_encode($query->fetchAll(PDO::FETCH_ASSOC));
  }

  public function create($name, $password, $email) {
    $sql = "INSERT INTO user (name, password, email, date) 
              VALUES (?,?,?,NOW() )";
    $query = $this->db->prepare($sql);
    $query->execute(array($name, $password, $email));
    $id = $this->db->lastInsertId();
    $data = array('name' => $name, 'id' => $id);
    echo json_encode($data);
  }

  public function deleteById($id) {
    $sql = "DELETE FROM user WHERE
             id = ?";
    $query = $this->db->prepare($sql);
    $query->execute(array($id));
  }

}

//private non è leggibile, da usare per ciclare solo i public
//puoi iniettare funzioni costruite ad hoc con gli oggetti
// non impestare la dbMapper

class dbMapper extends Model{
  
  protected $obj;
  protected $classname;
  protected $properties;
  protected $setProperties;
  protected $updProperties;
  

  public function __construct($domainObject) {
    parent::__construct();
    $this->obj = $domainObject;
    
    
  }

  public function map() {
    foreach ($this->setProperties as $property) {
      if (!isset($properties))
        $properties = $property;
      else
        $properties = $properties . ", " . $property;
      $values[]=$this->obj->{$property};
    }
    
    $sql = "INSERT INTO " . $this->classname . 
            " (" . $properties . 
            ") VALUES (?,?,?,?)";
    $query = $this->db->prepare($sql);
    $query->execute($values);
  }

  public function erase() {
    $sql = "DELETE FROM " . $this->classname . 
            "WHERE id = ?";
    $query = $this->db->prepare($sql);
    $query->execute(array($this->obj->id));
  }

  public function sync() {
    
  }

  public function load() {
    
  }

}

class userMapper extends dbMapper {
  public function __construct($object) {
    parent::__construct($object);
    $this->classname = "user";
    $this->setProperties = array("name", "password", "email", "date");
    $this->updProperties = array("name", "password", "email",
        "level", "resetcode");
  }
}

class user {

  public function __construct() {
    
  }

  public function create($name, $pass, $email) {
    $this->name = $name;
    $this->password = $pass;
    $this->email = $email;
    $this->date = date("Y-m-d H:i:s");
  }
  
  public function load($id) {
    
  }

  public function set() {
    
  }

  public function delete() {
    
  }
  
  public $id;
  public $name;
  public $password;
  public $email;
  public $date;
  public $level;
  public $resetcode;
}
