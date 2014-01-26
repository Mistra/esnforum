<?php

class login_View extends View {
  public function __construct() {
      parent::__construct();
  }
  
  public function render(){
    echo "<form method='POST' action='/esnforum/login/input'> Nome<input type='text' name='Nome' /><br/>";
    echo "Password<input type='password' name='Password' /><br/>";
    echo "<input type='submit' value='Submit' /></form> ";
  }
}
