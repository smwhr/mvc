<?php
require_once("../utils/init.php");

if(isset($_GET['controller'])){
  $controller_name = $_GET['controller'];  
}else{
  $controller_name = "index";  
}
if(isset($_GET['action'])){
  $action_name = $_GET['action'];
}else{
  $action_name = "index";
}

$class_name = ucfirst($controller_name)
                   ."Controller";

global $pdo;
try{
  $controller = new $class_name($pdo);
}catch(Exception $e){
  $controller = new ErrorController($pdo);
}

$action = strtolower($action_name)."Action";
if(!method_exists($controller,$action)){
  $controller = new ErrorController($pdo);
  $action = "e404";
}

$result = $controller->$action();

echo $result;


