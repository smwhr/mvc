<?php 

class CityController extends AbstractController{

  public function createAction(){
    return json_encode(["error"=>"not implemented"]);
  }
  public function showAction(){
    return json_encode(["error"=>"not implemented"]);
  }
  public function updateAction(){
    return json_encode(["error"=>"not implemented"]);
  }
  public function deleteAction(){
    $city_id = $_POST['city_id'];

    $q = $this->pdo->prepare('DELETE FROM destinations WHERE id = :city_id');
    $q->bindParam('city_id',$city_id);
    $q->execute();
    
    return json_encode(["message"=>"Supprimé !", "city_id"=>$city_id]);
  }
  
}