<?php

class Model {
  public function __construct() {
    $this->db = new PDO('mysql:host=localhost;dbname=my_skullolo','skullolo');
  }
}
