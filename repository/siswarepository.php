<?php

namespace repository;

use \PDO;
use entity\siswa;



interface siswarepository{
  public function save($nama,$alamat):void;
  public function delete($id):void;
  public function update($id,$nama,$alamat):void;
  public function findAll():array;
  public function find($id):array;
  public function pagination($mulai,$limit):array;
}

class siswarepositoryimpl implements siswarepository{
  
  private $connection;
  
  public function __construct($connection){
    $this->connection = $connection;
  }
  
  public function save($nama,$alamat):void{
    
    $sql = "INSERT INTO siswa(nama,alamat) VALUES(:nama,:alamat)";
    
    $statement = $this->connection->prepare($sql);
    $statement->bindParam('nama',$nama);
    $statement->bindParam('alamat',$alamat);
    $statement->execute();
    
    
  }
  
  public function delete($id):void{
    
    $sql = "delete from siswa where id = ?";
    $statement = $this->connection->prepare($sql);
    $statement->execute([$id]);
    
  }
  
  public function update($id,$nama,$alamat):void{
    
    $sql = "UPDATE siswa SET nama = ?, alamat = ? where id = ?";
    $statement = $this->connection->prepare($sql);
    
    $statement->execute([$nama,$alamat,$id]);
    
  }
  
  public function find($id):array{
    
    $id = (int)$id;
    $sql = "select * from siswa where id = ?;";
    
    $statement = $this->connection->prepare($sql);
    $statement->execute([$id]);
    
    return $statement->fetch(PDO::FETCH_ASSOC);
  }
  
  public function findAll():array{
    
    $sql = "select id,nama,alamat from siswa";
    $result = $this->connection->prepare($sql);
    $result->execute();
     return $result->fetchAll(PDO::FETCH_ASSOC);
  }
  
  public function pagination($mulai,$limit):array{
    
    $sql = "select * from siswa limit $mulai, $limit";
    $result = $this->connection->prepare($sql);
    $result->execute();
    
     return $result->fetchAll(PDO::FETCH_ASSOC);
    
  }
}