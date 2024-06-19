<?php

namespace entity;

class siswa{
  private $nama;
  private $alamat;
  
  public function __construct($nama ="",$alamat=""){
    $this->nama = $nama;
    $this->alamat = $alamat;
  }
  
  public function setNama($nama){
    $this->nama = $nama;
  }
  
  public function setAlamat(){
    $this->alamat = $alamat;
  }
  
  public function getNama():string{
    return $this->nama;
  }
  
  public function getAlamat():string{
    return $this->alamat;
  }
}