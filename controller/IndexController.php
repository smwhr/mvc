<?php

class IndexController extends AbstractController{
  public function indexAction(){
    $res = $this->pdo->query("SELECT * FROM destinations");
    $destinations = [];
    foreach ($res as $row) {
      $destinations[] = $row;
    }
    $content = include("../view/index.php");
    return $content;
  }
}