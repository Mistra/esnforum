<?php

class View {
  public function __construct() {
    echo "Inizio Header </br></br>";
    
    echo "<a href='/esnforum/index'>Index</a> </br>";
    echo "<a href='/esnforum/login'>Login</a> </br>";
    
    echo "</br>Fine Header </br></br>";
  }
  
  public function __destruct() {
    echo "</br>Inizio Footer </br></br>";
    echo "</br> Fine Footer </br>";
  }

}
