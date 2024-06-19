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
    
    if($_SERVER['REQUEST_METHOD'] == "GET"){
      
    $id = $_GET['id'];
    
    $data = $service->find($id);
    
    $id_lagi = $data['id'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    
    }
    ?>
    
      <?php
  
  if($_SERVER["REQUEST_METHOD"] == "POST" ){
    
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    
    $service->update($id,$nama,$alamat);
    
    echo"<h1>berhasil update data</h1>";
    echo"<a href='siswafind.php'>Kembali ke halaman</a>";
    exit();
    
}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>update data</title>
</head>
<body>
  <h1>Update data</h1>
  <form action="" method="post">
    
    <label for="id">Id</label><br>
    <input type="text" name="id" value="<?= $id; ?>" readonly><br>
    <label for="nama">Nama</label><br>
    <input type="text" name="nama" value="<?= $nama; ?>" required><br>
    <label for="alamat">Alamat</label><br>
    <input type="text" name="alamat" value="<?= $alamat; ?>" required><br>
    <br>
    <input type="submit" value="simpan">
  </form>
</body>
</html>