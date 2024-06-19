<?php

namespace service;

use repository\siswarepositoryimpl;

interface siswaservice{
  public function save($nama,$alamat):void;
  public function delete($id):void;
  public function update($id,$nama,$alamat):void;
  public function findAll():array;
  public function find($siswa):array;
  
}

class siswaserviceimpl implements siswaservice{
  
  private $repository;
  
  public function __construct($repository){
    $this->repository = $repository;
  }
  
  public function save($nama,$alamat):void{
    
    $this->repository->save($nama,$alamat);
    
  }
  
  
  public function delete($siswa):void{
    
    $this->repository->delete($siswa);
  }
  
  public function update($id,$nama,$alamat):void{
    
    $this->repository->update($id,$nama,$alamat);
    
  }
  
  public function find($siswa):array{
    
    $result = $this->repository->find($siswa);
    
    if($result){
      return $result;
    }else{
      
    }
  }
  
  public function findAll():array{
    
    return $this->repository->findAll();
  }
  
}
