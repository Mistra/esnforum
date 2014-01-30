<?php

class Session {

  public static function init() {
    session_start();
  }

  public static function get($user=0) {
    if (isset($_SESSION['logged']) && $_SESSION['logged'] == true) {
      return true;
    } else {
      return false;
    }
  }

  public static function set($user, $level = 1) {
    $_SESSION['logged'] = true;
  }

  public static function destroy() {
    session_destroy();
  }

}
