<?php

namespace repository;

use \PDO;


interface adminrepository{
  
  public function save($username,$password,$nama,$email);
  public function find($username);
  
}
class adminrepositoryimpl implements adminrepository{
  
  var $connection;
  
  public function __construct($connection){
    
    $this->connection = $connection;
    
  }
  
  public function save($username,$password,$nama,$email){
    
    $sql = "insert into admin(username,password,nama,email) values(?,?,?,?)";
    $statement = $this->connection->prepare($sql);
    $statement->execute([$username,$password,$nama,$email]);
    
  }
  
  public function find($username){
    
    $sql = "select * from admin where username = ?";
    
    $statement = $this->connection->prepare($sql);
    $statement->execute([$username]);
    
    return $statement->fetch(PDO::FETCH_ASSOC);
    
  }
}
