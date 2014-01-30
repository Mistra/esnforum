<?php

class Bootstrap {

  private $object = NULL;
  private $method = NULL;
  private $param = array();

  public function __construct() {
    $urlArray = explode('/', rtrim(filter_input(INPUT_GET, 'url'), "/"));
    foreach ($urlArray as $key => $value) {
      switch ($key) {
        case 0: $this->object = $value;
          break;
        case 1: $this->method = $value;
          break;
        default: $this->param[] = $value;
      }
    }
  }

  public function enroute() {
    if (!file_exists("controllers/" . $this->object . ".php")) 
      $this->object = 'error';

    $controller = new $this->object;

    if ($this->method != NULL) {
      call_user_func_array(array($controller, $this->method), $this->param);
    } else {
      $controller->{"index"}();
    }
  }

}
