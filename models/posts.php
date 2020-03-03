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
public $created_at; 

public  function __construct($db)
{
    $this->conn = $db;
}
public function read(){


    $quary = ' select  c.name as category_name,
    
        p.id,
        p.catagory_id,
        p.title,
        p.body,
        p.author,
        p.created_at
    FROM 
    '
    . $this->table  .'p
    
        LEAFT JOIN
        categories c ON p.category.id = p.id 
        order by p.created_at DESC ;
    ' ;

    $stmt =  $this->conn->prepare($quary);
    $stmt.execute();
    return $stmt ;
}




}