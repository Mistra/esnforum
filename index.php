<?php

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
  $filename = "views/" . $className . "/" . $className . ".php";
  if (is_readable($filename)) {
    require $filename;
  }
  }

function autoloadModel($className) {
  $className = substr($className, 0, -6);
  $filename = "models/" . $className . ".php";
  if (is_readable($filename)) {
    require $filename;
  }
}

spl_autoload_register("autoloadLib");
spl_autoload_register("autoloadController");
spl_autoload_register("autoloadView");
spl_autoload_register("autoloadModel");

$forum = new Bootstrap();
$forum->enroute();
