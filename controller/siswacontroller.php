<?php

namespace controller;
use service\siswaserviceimpl;
use entity\siswa;
class siswacontroller{
  
  private $service;
  private $siswa;
  
  public function __construct($service,$siswa){
    
    $this->service = $service;
    $thie->siswa = $siswa;
    
  }
  
  public function save($nama,$alamat){
    
    $this->siswa->setNama($nama);
    $this->siswa->setAlamat($alamat);
    
    $this->service->save($this->siswa);
  }
  
}