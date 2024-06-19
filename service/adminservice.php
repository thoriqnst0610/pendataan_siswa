<?php

namespace service;



interface adminservice{
  
  public function register($username,$password,$nama,$email);
  public function login($username,$password);
  public function find($username);
  
}
class adminserviceimpl implements adminservice{
  
  var $repository;
  
  public function __construct($repository){
    
    $this->repository = $repository;
    
  }
  
  public function register($username,$password,$nama,$email){
    
    if($username == " " or $password == " " or $nama == " " or $email == " "){
      
      return false;
      
      
    }else{
      
      $admin = $this->login($username,$password);
      
      if($admin){
        
        
        return false;
        
      }else{
      
      $password = password_hash($password,PASSWORD_DEFAULT);
      
      $this->repository->save($username,$password,$nama,$email);
      
      return true;
      
      }
      
    }
    
  }
  
  public function login($username,$password){
    
    $admin = $this->repository->find($username);
    
    if($admin){
      
      $password_hash = $admin['password'];
      
      $cek_password = password_verify($password,$password_hash);
      
      if($cek_password){
        
        return $admin['id'];
        
      }else{
        
        return false;
        
      }
      
    }else{
      
      return false;
      
    }
    
  }
  
  public function find($username){
    
    if($username == " "){
      
      return false;
      
    }else{
      
      $admin = $this->repository->find($username);
      
      return $admin;
      
    }
    
  }
  
}