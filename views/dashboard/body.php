<h1> Dashboard! </h1>

<?php

require ("models/user.php");

$current = new user;
$current->create("dio", "nio", "jio");
$current = $current->map();
var_dump($current->setProperties);
echo $current->id;
//$current = $mapper->load(168);
//echo $current->getName();

/*
class A 
{
  public function __construct(){
    $this->_x="jack";
  }
  public function foo(){
    return "fool";
  }
  private $_x;   
}

class B 
{
  public function foo(){
    return $this->_x;
  }
  public $_x;   
}

$a = new A();

$x = cast('B',$a);
echo $x->foo();*/