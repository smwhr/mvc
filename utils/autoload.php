<?php
spl_autoload_register(function($class_name){
  $controller_file = "../controller/"
                   .$class_name
                   .".php";
  if(!file_exists($controller_file)){
    throw new Exception("Cannot find ".$controller_file);
  }
  require_once($controller_file);
});