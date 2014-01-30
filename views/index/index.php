<?php

class index_View extends View {
  public function __construct() {
    parent::__construct();
    $this->category = new category_Model;
  }
}
