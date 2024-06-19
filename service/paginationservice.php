<?php

namespace paginations;

use service\siswaserviceimpl;

class pagination{
  
  var $repository;
  var $service;
  var $data = array();
  var $penomoran;
  var $halaman;
  var $findAll = array();
  
  public function __construct($findAll,$repository){
    
    $this->repository = $repository;
    $this->service = $findAll;
    $this->findAll = $findAll->findAll();
    
  }
  
  public function pagination($angka = 1){
    
    $data = $this->findAll;
    
    $data = count($data);
    $halaman = 10;
    $sisa_bagi = $data % $halaman;
    $jumlah = $data / $halaman;
    
    if($sisa_bagi != 0){
      $jumlah = floor($jumlah) + 1;
    }
    
    $mulai = 0;
    $i = 1;
    $kondisi = true;
    while($kondisi){
      
      $mulais = $mulai + 10;
      
      if($mulais < $data){
        
        $mulai = $mulai;
        $limit = 10;
        
      }else{
        
        $count = count(array_slice($this->findAll,$mulai));
        $mulai = $mulai;
        $limit = $count;
        
      }
      
      if($i == $angka){
        
       $kondisi = false;
       
      }else{
      
      $mulai = $mulai + 10;
      $i++;
      }
    }
    
  $this->data = $this->repository->pagination($mulai,$limit);
   
  }
  
  public function nomor($angka = 1){
    $data = $this->findAll;
    $data = count($data);
    $halaman = 10;
    $sisa_bagi = $data % $halaman;
    $jumlah = $data / $halaman;
    
    if($sisa_bagi != 0){
      $jumlah = floor($jumlah) + 1;
    }
    
    $mulai = 0;
    $i = 1;
    $kondisi = true;
    while($kondisi){
      
      $mulais = $mulai + 10;
      if($mulais < $data){
        
        $mulai = $mulai;
        $limit = $mulais;
        
      }else{
        
        $count = count(array_slice($this->findAll,$mulai));
        $mulai = $mulai;
        $limit = $count;
        
      }
      
      if($i == $angka){
        
       $kondisi = false;
       
      }else{
      
      $mulai = $mulai + 10;
      $i++;
      }
    }
    $this->penomoran = $mulai;
  }
  
  public function halaman(){
    $data = $this->findAll;
    $data = count($data);
    $halaman = 10;
    $sisa_bagi = $data % $halaman;
     $jumlah = $data / $halaman;
    if($sisa_bagi != 0){
      $this->halaman = $jumlah = floor($jumlah) + 1;
    }else{
      $this->halaman = $jumlah = $data / $halaman;
    }
  }
  
}