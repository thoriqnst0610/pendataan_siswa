<?php
require_once"../../config/database.php";
require_once"../../repository/siswarepository.php";
require_once"../../repository/sessionrepository.php";
require_once"../../service/siswaservice.php";
require_once"../../service/paginationservice.php";
require_once"../../service/sessionservice.php";
      
      use database\connection;
      use repository\siswarepositoryimpl;
      use repository\sessionrepositoryimpl;
      use service\siswaserviceimpl;
      use service\sessionserviceimpl;
      use paginations\pagination;
      
      
      $connection = connection::gas();
      $repository = new siswarepositoryimpl($connection);
      $session_repository = new sessionrepositoryimpl($connection);
      $service = new siswaserviceimpl($repository);
      $session_service = new sessionserviceimpl($session_repository);
      $pagination = new pagination($service,$repository);
      
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
      
      
      if(isset($_GET['id'])){
        $pagination->pagination($_GET['id']);
        $data = $pagination->data;
      }else{
      $pagination->pagination();
      $data = $pagination->data;
      
      }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>tampil data</title>
  <body>
    <h1>Halaman Menampilkan Data</h1>
    <div>
      <a href="siswaadd.php">Tambah Data</a>
      <a href="logout.php">Log out</a>
    </div>
    <br>
    <table border="1">
      <tr>
        
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
      <?php
      if(isset($_GET['id'])){
        
        $nomor = $_GET['id'];
        $pagination->nomor($nomor);
        $no = $pagination->penomoran;
        
        }else{
          
        $pagination->nomor();
        $no = $pagination->penomoran;
        
        }
        
        if(isset($_GET['next'])){
          $aktif = $_GET['next'];
        }elseif(isset($_GET['kembali'])){
          $aktif = $_GET['kembali'];
        }elseif($_GET['mulai']){
          $aktif = $_GET['mulai'];
        }else{
          $aktif = 1;
        }
        $mulai = $aktif;
        $mulais = $aktif;
        $akhir = $mulai + 4;
        $kembali = $mulai - 1;
        $next = $mulai + 1;
        $next_lagi = $next + 4;
      
      foreach($data as $row){
        $id = $row['id'];
        $no++;
      ?>
      <tr>
        
        <td><?= $no; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><a href="siswaupdate.php?id=<?= $id ?>">update</a> || <a href="siswadelete.php?id=<?= $id ?>">delete</a></td>
      </tr>
      
      <?php } ?>
      
    </table>
    <br>
    <?php
    if($mulai <= 1){
      echo "kembali";
    }else{ ?>
    <a href="siswafind.php?kembali=<?= $kembali; ?>&id=<?= $kembali; ?>">kembali</a>
    
    <?php } echo" "; echo" ";?>
    
    <?php
    
    
    
    $pagination->halaman();
    $jumlah = $pagination->halaman;
    
    for($mulai; $mulai <= $akhir; $mulai++)
    {
      
    ?>
    <a href="siswafind.php?id=<?= $mulai; ?>&mulai=<?= $mulais; ?>"><?= $mulai; ?></a>
    <?php } echo" ";echo" ";
    ?>
    <?php
    if($akhir >= $jumlah){
      echo"next";
    }else{ ?>
    <a href="siswafind.php?next=<?= $next; ?>&id=<?= $next_lagi; ?>">next</a>
 <?php   } ?>
  </body>
</head>
</html>