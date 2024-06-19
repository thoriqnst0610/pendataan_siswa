<?php

namespace repository;

use \PDO;


interface sessionrepository{
  
  public function save($id_admin,$session);
  public function find($id_admin);
  public function find_session($session);
  public function delete($session);
  
}

class sessionrepositoryimpl implements sessionrepository{
  
  var $connection;
  
  public function __construct($connection){
    $this->connection = $connection;
  }
  
  public function save($id_admin,$session){
    
    $sql = "insert into session(id_admin,session) values(?,?)";
    
    $statement = $this->connection->prepare($sql);
    
    $statement->execute([$id_admin,$session]);
    
  }
  
  public function find($id_admin){
    
    $sql = "select * from session where id_admin = ?";
    
    $statement = $this->connection->prepare($sql);
    $statement->execute([$id_admin]);
    
    return $statement->fetch(PDO::FETCH_ASSOC);
    
  }
  
  public function find_session($session){
    
    $sql = "select * from session where session = ?";
    
    $statement = $this->connection->prepare($sql);
    $statement->execute([$session]);
    
    return $statement->fetch(PDO::FETCH_ASSOC);
    
  }
  
  public function delete($session){
    
    $sql = "delete from session where session = ?";
    
    $statement = $this->connection->prepare($sql);
    
    $statement->execute([$session]);
    
  }
}