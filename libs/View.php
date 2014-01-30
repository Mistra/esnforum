<?php

class View {

  public function __construct() {
    $this->body = "views/" . substr(get_class($this), 0, -5) . "/body.php";
    $this->header = "views/header.php";
    $this->footer = "views/footer.php";
  }

  public function render() {
    require $this->header;
    require $this->body;
    require $this->footer;
  }
}
