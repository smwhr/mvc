<?php 

class UserController{
  public function formloginAction(){
    $view = include("../view/loginform.php");
    return $view;
  }

  public function postloginAction(){
    if(isset($_POST['login'])){
      return json_encode(true);
    }else{
      return json_encode(false);
    }
  }
  
}