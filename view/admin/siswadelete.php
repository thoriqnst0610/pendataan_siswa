<?php

require_once"../../config/database.php";
  require_once"../../repository/siswarepository.php";
  require_once"../../repository/sessionrepository.php";
  require_once"../../service/siswaservice.php";
  require_once"../../service/sessionservice.php";
      
      use database\connection;
      use repository\siswarepositoryimpl;
      use repository\sessionrepositoryimpl;
      use service\siswaserviceimpl;
      use service\sessionserviceimpl;
      
      
      $connection = connection::gas();
      $repository = new siswarepositoryimpl($connection);
      $session_repository = new sessionrepositoryimpl($connection);
      $service = new siswaserviceimpl($repository);
      $session_service = new sessionserviceimpl($session_repository);
      
      //cek cookie
      
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


$id = $_GET['id'];

$connection = connection::gas();
$repository = new siswarepositoryimpl($connection);
$service = new siswaserviceimpl($repository);
$service->delete($id);


header("Location: siswafind.php");
exit();
