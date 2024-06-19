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
      
      
  
  if($_SERVER["REQUEST_METHOD"] == "POST" ){
    
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $service->save($nama,$alamat);
    
   header("Location: siswafind.php");
    exit();
    
  }
  
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>tambah data</title>
</head>
<body>
  <h1>Tambah data</h1>
  <form action="" method="POST">
    <label for="nama">nama</label><br>
    <input type="text" name="nama" required><br>
    <label for="alamat">alamat</label><br>
    <input type="text" name="alamat" required>
    <br>
    <input type="submit" value="simpan">
  </form>
</body>
</html>