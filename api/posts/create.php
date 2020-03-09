<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Posts.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  $post = new Posts($db);
$data = json_decode(file_get_contents("php://input"));
$post->title = $data->title; 
$post->author = $data->author; 
$post->body = $data->body; 
$post->gategory_id = $data->gategory_id; 


if($post->create()){


echo json_encode(array('message' => 'post created'));



}

else {


  echo json_encode(array('message'=>'post not created'));
}