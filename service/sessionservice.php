<?php

namespace service;

interface sessionservice{
  
  public function save($id_admin);
  
  public function find($id_admin);
  public function find_session($session);
  public function delete($session);
  
}
class sessionserviceimpl implements sessionservice{
  
  var $repository;
  
  public function __construct($repository){
    
    $this->repository = $repository;
    
  }
  
  public function save($id_admin){
    
    $session = bin2hex(random_bytes(8));
    $kondisi = true;
    
    while($kondisi){
      
       $cek_session = $this->find_session($session);
    
    if($cek_session != false){
      
      $session = bin2hex(random_bytes(8));
      
    }else{
      
      $simpan = $this->repository->save($id_admin,$session);
      
      $cookie = $this->find_session($session);
      return $cookie;
      $kondisi = false;
      
    }
      
    }
    
    
    
  }
  
  public function find($id_admin){
    
    $cek_session = $this->repository->find($id_admin);
    
    if($cek_session){
      
      return $cek_session['session'];
      
    }else{
      
      return false;
      
    }
    
  }
  
  public function find_session($session){
    
    $cek_session = $this->repository->find_session($session);
    
    if($cek_session){
      
      return $cek_session['session'];
      
    }else{
      
      return false;
      
      
    }
    
  }
  
  public function delete($session){
    
    if($session == " "){
      
      return false;
      
    }else{
      
      $this->repository->delete($session);
      return true;
      
    }
    
  }
}