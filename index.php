<?php

//call_user_func_array("foo", $array);

function autoloadLib($className) {
  $filename = "libs/" . $className . ".php";
  if (is_readable($filename)) {
    require $filename;
  }
}

function autoloadController($className) {
  $filename = "controllers/" . $className . ".php";
  if (is_readable($filename)) {
    require $filename;
  }
}

function autoloadView($className) {
  $className = substr($className, 0, -5);
  $filename = "views/" . $className . ".php";
  if (is_readable($filename)) {
    require $filename;
  }
}

spl_autoload_register("autoloadLib");
spl_autoload_register("autoloadController");
spl_autoload_register("autoloadView");


$forum = new Bootstrap();
$forum->enroute();
