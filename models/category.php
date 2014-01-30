<?php

class category_Model extends Model {

  public function __construct() {
    parent::__construct();
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
