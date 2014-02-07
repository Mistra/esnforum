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

function cast($destination, $sourceObject) {
  if (is_string($destination)) {
    $destination = new $destination();
  }
  $sourceReflection = new ReflectionObject($sourceObject);
  $destinationReflection = new ReflectionObject($destination);
  $sourceProperties = $sourceReflection->getProperties();
  foreach ($sourceProperties as $sourceProperty) {
    $sourceProperty->setAccessible(true);
    $name = $sourceProperty->getName();
    $value = $sourceProperty->getValue($sourceObject);
    if ($destinationReflection->hasProperty($name)) {
      $propDest = $destinationReflection->getProperty($name);
      $propDest->setAccessible(true);
      $propDest->setValue($destination, $value);
    } else {
      $destination->$name = $value;
    }
  }
  return $destination;
}



//private non è leggibile, da usare per ciclare solo i public
//puoi iniettare funzioni costruite ad hoc con gli oggetti
// non impestare la dbMapper

class dbMapper extends Model {
  
  public function __construct() {
    parent::__construct();
  }

  public function map() {
    foreach ($this->setProperties as $property) {
      if (!isset($properties)) {
        $qstring = "?";
        $properties = $property;
      } else {
        $qstring = $qstring . ",?";
        $properties = $properties . ", " . $property;
      }
      $values[] = $this->{$property};
    }

    $sql = "INSERT INTO " . get_class($this) .
            " (" . $properties .
            ") VALUES (".$qstring.")";
    $query = $this->db->prepare($sql);
    $query->execute($values);
    $this->load($this->db->lastInsertId());
  }

  public function erase() {
    $sql = "DELETE FROM " . $this->classname .
            "WHERE id = ?";
    $query = $this->db->prepare($sql);
    $query->execute(array($this->obj->id));
  }

  public function sync() {
    
  }

  public function load($id) {
    $sql = "SELECT * FROM " . get_class($this) .
            " WHERE id=?";
    $query = $this->db->prepare($sql);
    $query->execute(array($id));
    $semiobj = $query->fetchObject();
    //echo $semiobj->id;
    return cast('user', $semiobj);
    //return $this->obj;
  }

} 

class user extends dbMapper {
  public $setProperties;
  public function __construct() {
    parent::__construct();
    $this->setProperties = array("name", "password", "email",);
    }

  public function getName() {
    return $this->name;
  }

  public function create($name, $pass, $email) {
    $this->name = $name;
    $this->password = $pass;
    $this->email = $email;
  }
  
  /*
  public function load($id) {
    
  }*/

  public function set() {
    
  }

  public function delete() {
    
  }
}