<?php

class error_View extends View{
  public function __construct() {
    parent::__construct();
  }
  
  public function render() {
    echo "Error: This page does not exists </br>";
  }
}
