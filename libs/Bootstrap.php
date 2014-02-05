<?php
// Fix: fai in modo che la pagina che finisca per / dia errore
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
    if ($this->method == NULL) {
      $this->method = "index";
    }

    if ((!file_exists("controllers/" . $this->object . ".php")) or
            (!method_exists($this->object, $this->method))) {
      $this->object = 'error';
      $this->method = "index";
    }

    $controller = new $this->object;
    call_user_func_array(array($controller, $this->method), $this->param);
  }

}
