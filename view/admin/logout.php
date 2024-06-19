<?php

require_once"../../config/database.php";
require_once"../../repository/sessionrepository.php";
require_once"../../service/sessionservice.php";

      use database\connection;
      use service\sessionserviceimpl;
      use repository\sessionrepositoryimpl;
      
      $connection = connection::gas();
      $session_repository = new sessionrepositoryimpl($connection);
      $session_service = new sessionserviceimpl($session_repository);
      
      if(!isset($_COOKIE['session'])){
        
        header("Location: ../login.php");
        exit();
        
      }else{
        
        $session = $_COOKIE['session'];
        
        $cek_session = $session_service->find_session($session);
        
        if($cek_session == false){
          
          header("Location: ../login.php");
          exit();
          
        }
        
        
      }
      
      $cookie = $_COOKIE['session'];
      //hapus session
      $session_service->delete($cookie);
      //hapus $_COOKIE
      
      setcookie("session","",time()-3600,"/");
      
      header("Location: ../login.php");
      exit();
      