<?php 
   require_once 'koneksi.php';
   ?>
<?php
   $nama_menu = $_POST['nama_menu'];
   $harga = $_POST['harga'];
   $jpg = ".jpg";
   $file = $_FILES["gambar"]["tmp_name"];
   $folder = "img/";
   move_uploaded_file($file, $folder.$nama_menu.$jpg);
   
   
   $sql = "INSERT INTO data_menu (nama_menu, gambar, harga, tersedia)
   VALUES ('$nama_menu', '$nama_menu.jpg', $harga, 1)";
   
    if (mysqli_query($conn, $sql)) {
        echo "Data Berhasil di Input";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location: index.php");
    exit;
   ?>
<a href="tambah.php">kembali</a>