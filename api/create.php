<?php 
  // Headers
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods:POST');
  header('Access-Control-Allow-Headers:Access-control-Allow-Headers');

  include_once '../../config/Database.php';
  include_once '../../models/Posts.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  $post = new Posts($db);
