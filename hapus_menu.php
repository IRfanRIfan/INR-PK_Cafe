<!DOCTYPE html>
<html lang="id">
   <head>
      <title>Peringantan</title>
      <meta name="author" content="Ahmad Ghazali">
      <link rel="icon"  href="img/Kaset-1.png">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Boostrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- Tailwind CSS -->
      <!-- <script src="https://cdn.tailwindcss.com"></script> -->
      <!-- css external -->
      <link href="css/style.css" rel="stylesheet">
      <!-- Javascript External -->
      <script src="js/main.js"></script>
   </head>
   <style>
      h3{
      mar
      text-align : center;
      }
      a{
      text-align : center;
      }
      #tombol{
      /* margin :2px  auto; */
      text-align: center
      }
      .container{
      text-align: center;
      margin-top:200px ;
      }
      .sembunyi{
         display : none
      }
   </style>
   <body>
      <div class="container">
         <?php 
            require_once 'koneksi.php';
            


            $id = mysqli_real_escape_string($conn, $_GET['nama_menu']);
            $selek = "SELECT * FROM `data_menu` WHERE nama_menu = '$id'";
            $hasil = mysqli_query($conn, $selek);
            if ($hasil) {
                $raw = mysqli_fetch_assoc($hasil);
                $gambar =  $raw['gambar'];
                $nmenu = $raw['nama_menu'];
            } 

            $sql = "DELETE FROM data_menu WHERE nama_menu = '$id' ";
            
            echo "<h1>". $nmenu. " tidak dapat dihapus karena sementara ada yang pesan </h1>";
        ?>
         <a href="index.php" class="btn btn-primary">Kembali</a>
         <div class="sembunyi">
<?php
            if (mysqli_query($conn, $sql)) {
                echo "Data Telah di Hapus bro";
                unlink("img/$gambar");
    header("Location: index.php");

            }else {

            }
            
            ?>
            </div>
         <br>
      </div>
   </body>