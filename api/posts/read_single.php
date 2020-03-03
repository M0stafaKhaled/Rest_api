<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');

  include_once '../../config/Database.php';
  include_once '../../models/Posts.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  $post = new Posts($db);

  $post->id = isset($_GET['id']) ? $_GET['id'] : die();
  $post->read_single();

  $post_arry = array(

    'id' => $post->id ,
    'title' => $post->title ,
    'body' => $post->body,
    'author' => $post->author,
    'category_name' =>$post->category_name,
    'category_id' =>$post->category_id,
  );

  print_r(json_encode($post_arry));