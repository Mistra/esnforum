<?php

class category_Model extends Model {

  public function __construct() {
    parent::__construct();
  }
  
  public function getById($id) {
    $sql = "SELECT name FROM
              category WHERE id = ?";
    $query = $this->db->prepare($sql);
    $query->execute(array($id));
    //var_dump($query->fetch());
    return $query->fetch();
  }

  public function getList() {
    $sql = "SELECT name, category.id as id, description, title
              FROM category LEFT JOIN (SELECT * FROM thread 
                                     ORDER BY date DESC) as thread
              ON category.id = thread.category
              GROUP BY category.id";
    $query = $this->db->prepare($sql);
    $query->execute();
    return $query->fetchAll(); //array
  }
}
