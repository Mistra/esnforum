<?php

class Session {

  public static function init() {
    session_start();
  }

  public static function logged($bool = NULL) {
    if ($bool != NULL)
      $_SESSION['logged'] = $bool;
    else if (!isset($_SESSION['logged']))
      $_SESSION['logged'] = false;
    return $_SESSION['logged'];
  }

  public static function id($id = NULL) {
    if ($id != NULL)
      $_SESSION['id'] = $id;
    return $_SESSION['id'];
  }

  public static function name($name = NULL) {
    if ($name != NULL)
      $_SESSION['name'] = $name;
    return $_SESSION['name'];
  }

  public static function email($email = NULL) {
    if ($email != NULL)
      $_SESSION['email'] = $email;
    return $_SESSION['email'];
  }

  public static function level($level = NULL) {
    if ($id != NULL)
      $_SESSION['level'] = $level;
    return $_SESSION['level'];
  }

  public static function destroy() {
    session_destroy();
  }

}
