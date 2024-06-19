<?php

require_once"../../config/database.php";
  require_once"../../repository/adminrepository.php";
  require_once"../../service/adminservice.php";
      
      use database\connection;
      use repository\adminrepositoryimpl;
      use service\adminserviceimpl;
      
      
      $connection = connection::gas();
      $repository = new adminrepositoryimpl($connection);
      $service = new adminserviceimpl($repository);
      
      $request = $_SERVER['REQUEST_METHOD'];
      
      if($request == "POST"){
        
       $simpan = $service->register($_POST['username'],$_POST['password'],$_POST['nama'],$_POST['email']);
        
        if($simpan){
          
          header("Location: ../login.php");
          exit();
          
        }else{
          
          //echo "Gagal Registrasi, username sudah ada";
          
        }
        
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registerasi</title>
</head>
<body>
  <h1>Registrasi</h1>
  <form action="" method="POST">
    <label for="nama">nama</label><br>
    <input type="text" name="nama"><br>
    <label for="username">username</label><br>
    <input type="text" name="username" required>
    <br>
    <label for="password">password</label><br>
    <input type="text" name="password" required>
    <br>
    <label for="username">email</label><br>
    <input type="text" name="email" required>
    <br>
    <input type="submit" value="simpan">
    
  </form>
</body>
</html>