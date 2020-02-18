<?php 
class DataBase {
//DB parameter 
  private $host = 'localhost';
  private $userName = 'root';
  private $dataBaseName = 'blog';
  private $password = '';
  private $conn ; 
//DB connect 

public function conncet(){
$this->conn = new pdo('mysql:host=' .$this->host . ';dbname ='. $this->dataBaseName , $this->username, $this->password);
$this->conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION); 
try {


}
  catch (PDOException $e){

echo 'Connection Error:' . $e->getMessage();

  }
  
  return $this->conn; 
}



}

