<?php

class index_View extends View {
  public function __construct() {
    parent::__construct();
  }
  
  public function render() {
    echo "Welcome to the index! <br/>";
  }
}
