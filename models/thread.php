<?php

class thread_Model extends Model {

  public function __construct() {
    parent::__construct();
  }
  
  public function getListByCategory($id) {
    $sql = "SELECT title, user.nick as user, thread.id, tab.nick as lastby
            FROM thread, user, (SELECT nick, post.date as date, thread.id as tid
                                FROM thread, post, user 
                                WHERE post.user = user.id 
                                AND thread.id = post.thread 
                                ORDER BY post.date DESC) as tab
              WHERE category=?
              AND thread.id = tab.tid
              AND user = user.id 
              GROUP BY thread.id 
              ORDER BY tab.date DESC";

    $query = $this->db->prepare($sql);
    $query -> execute( array($id) );
    return $query->fetchAll();
  }
}