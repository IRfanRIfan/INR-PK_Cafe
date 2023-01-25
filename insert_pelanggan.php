<html>
   <head>
      <link rel="stylesheet" href="css/style.css">
      <title>Form Pesanan</title>
      <meta name="author" content="<Muh Irfan>">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Boostrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- css external -->
      <link href="css/style.css" rel="stylesheet">
      <!-- Javascript External -->
      <script src="js/main.js"></script>
   </head>
   <style>
      h1{
      text-align : center;
      }
      a{
      text-align : center;
      }
   </style>
   <body>
    
      <div class="container d-flex">
         <div class="mx-auto">
            <h3>
               <?php 
                  require_once 'koneksi.php'; 
                  
                  
                  $nama_pelanggan = $_POST['nama_pelanggan'];
                  $nama_pesanan = $_POST['nama_pesanan'];
                  $no_meja = $_POST['no_meja'];
                  $waktu_pesanan = date("Y-m-d H:i:s");
                  $sql = "INSERT INTO `data_pesanan`(`id_order`, `nama_pelanggan`, `nama_pesanan`,  `no_meja`, `waktu_pemesanan`) VALUES ('','$nama_pelanggan','$nama_pesanan','$no_meja','$waktu_pesanan')";
                  
                  //ambil data tersedia dari tabel menu
                  $ambe = "SELECT * FROM  data_menu where nama_menu = '$nama_pesanan'";
                  // transfer data
                  $hasel = mysqli_query($conn,$ambe);
                  if ($hasel) {
                      $row = mysqli_fetch_assoc($hasel);
                      $tersedia = $row['tersedia'];
                  }
                  if($tersedia == 1){
                  
                      if (mysqli_query($conn, $sql)) {
                          echo "Data Pelanggan Berhasil di Tambahkan";
                          header("Location: index.php");
                      }else {
                          
                           echo "Meja ".$no_meja." sudah di ambil";
                      }
                  }else{
                     
                     echo $nama_pesanan . " Tidak tersedia";
                     
                   
                  }
                  
                  ?>
            </h3>
            <br>
            <div class="mx-auto d-block">
               <a href="   tambah_pelanggan.php" class="btn btn-danger">Kembali</a>       
            </div>
         </div>
      </div>
   </body>