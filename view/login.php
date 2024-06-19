<?php

require_once"../config/database.php";
  require_once"../repository/adminrepository.php";
  require_once"../repository/sessionrepository.php";
  require_once"../service/adminservice.php";
  require_once"../service/sessionservice.php";
      
      use database\connection;
      use repository\adminrepositoryimpl;
      use repository\sessionrepositoryimpl;
      use service\adminserviceimpl;
      use service\sessionserviceimpl;
      
      
      $connection = connection::gas();
      $repository = new adminrepositoryimpl($connection);
      $admin_repository = new sessionrepositoryimpl($connection);
      $service = new adminserviceimpl($repository);
      $admin_session = new sessionserviceimpl($admin_repository);
      
      $request = $_SERVER['REQUEST_METHOD'];
      
      //cek cookie
      
      if(isset($_COOKIE['session'])){
        
        $cookie = $_COOKIE['session'];
        $cek_session = $admin_session->find_session($cookie);
        
        if($cek_session != false){
          
          header("Location: admin/siswafind.php");
          exit();
          
        }
        
      }
      
      //cek method
      
      if($request == "POST"){
        
       $login = $service->login($_POST['username'],$_POST['password']);
        
        if($login){
          
          $id_admin = $service->find($_POST['username']);
          
          $cek_dulu = $admin_session->find($id_admin['id']);
          
          if($cek_dulu != false){
            
            $session = $cek_dulu;
            
          }else{
          
          $session = $admin_session->save($id_admin['id']);
          
          }
          
          if($session != false){
            
            $waktu = time() + (30 * 24 * 60 * 60);
            
            setcookie("session", $session, $waktu, "/");
            
            header("Location: admin/siswafind.php");
          exit();
            
          }
          
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
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <a href="register/registrasi.php">Registrasi</a>
</body>
</html>