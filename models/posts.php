<?php 
class  posts {
        //Databases 
    private $conn ; 
    private $table = ' posts ';

//post propreties 
public $id ; 
public $category_id ;
public $category_name ; 
public $title ; 
public $body ; 
public $author ; 
public $create_at; 

public  function __construct($db)
{
    $this->conn = $db;
}




}