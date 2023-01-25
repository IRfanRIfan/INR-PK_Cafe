<?php 
   require_once 'koneksi.php';
   ?>
<html>
   <head>
      <link rel="stylesheet" href="css/style.css">
      <title>CRUD inr</title>
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
      #kartu_menu{
    height: 400px;
    /* margin-top: 50;
    margin-left: 10px;
    margin-right: 10px; */
      }
   #kartu_gambar{
      width: 100%;
      height: 100%;
      object-fit: cover;
   }
   #kartu_kartu{
      display : flex;
   }
   #tombol_menu{

      margin-top: 211px;
   }
      
   </style>
   <body>
      
      <div class="container">
         <div id="kartu_kartu">

         <?php
            //tampilkan tabel data menu
               $sql = "SELECT * FROM data_menu";
               $result = mysqli_query($conn, $sql);
               // perulangan tambpilan data
               if (mysqli_num_rows($result) > 0) {
                   // Output data per baris
                   while ($row = mysqli_fetch_assoc($result)) {
                   ?>
            <div class="bungkus">

         <div id="kartu_menu" class="card" style="width: 18rem;">
         <img class="card-img-top img-fluid " id="kartu_gambar"src="img/<?php echo $row["gambar"]?> " alt="Card image cap">

            <div class="card-body">
               <h5 class="card-title"><?php echo $row["nama_menu"]?></h5>
               <p class="card-text"><?php echo "RP ".$row["harga"]?></p>
               <p class="card-text"><?php if($row["tersedia"]== 1){ echo "Tersedia"; }else{echo "Tidak Tersedia";}?></p>
               <a href="edit.php?nama_menu=<?php echo $row['nama_menu']?>" class="btn btn-primary">Edit</a>
               <a href="hapus_menu.php?nama_menu=<?php echo $row['nama_menu']?>" class="btn btn-danger">Hapus</a>
               
            </div>
         </div>
         </div>       

         <?php
            ?>
         <?php
            }
            } else {
            // echo "Tidak ada data";
            }
            ?>
            <br>
            <br>
         </div>
            
            <a href="tambah.php" id= "tombol_menu"class="btn btn-primary">Tambah Menu</a>
            <br>
            <br>
   
         <h1>Kontl</h1>
            <table id="pelanggan" class="table table-bordered">
            <tr>
               <th scope="col">No</th>
               <th scope="col">Nama Pelanggan</th>
               <th scope="col">Nama Pesanan</th>
               <th scope="col">Harga</th>
               <th scope="col">No Meja</th>
               <th scope="col">Waktu</th>
               <th scope="col">AKSI</th>
            </tr>
            <?php
               $sql =
                   "SELECT * FROM data_pesanan INNER JOIN data_menu ON data_pesanan.nama_pesanan = data_menu.nama_menu";
               $result = mysqli_query($conn, $sql);
               $no = 0;
               if (mysqli_num_rows($result) > 0) {
                   // Output data per baris
                   while ($row = mysqli_fetch_assoc($result)) {
                       $no++; ?>
            <tr>
               <td><?php echo $no; ?></td>
               <td><?php echo $row["nama_pelanggan"]; ?></td>
               <td><?php echo $row["nama_pesanan"]; ?></td>
               <td><?php echo $row["harga"]; ?></td>
               <td><?php echo $row["no_meja"];?></td>
               <td><?php echo $row["waktu_pemesanan"];?></td>
               <td>
                  <a href="sudahbayar.php?id_order=<?php echo $row['id_order']?>" class="btn btn-Success">Sudah Bayar</a>
                  <a href="edit_pelanggan.php?id_order=<?php echo $row['id_order']?>" class="btn btn-primary">Edit</a>
                  <a href="delete_pelanggan.php?id_order=<?php echo $row['id_order']?>" class="btn btn-danger">Hapus</a></td>
            </tr>
            <?php
               }
               } else {
               // echo "Tidak ada data";
               }
               ?> 
         </table>
      
      
         <a href="tambah_pelanggan.php" class="btn btn-primary">Tambah Pelanggan</a>
 
         <table class="table table-striped">
            <tr>
               <th>ID Riwayat</th>
               <th>ID Order</th>
               <th>Nama Pelanggan</th>
               <th>Waktu Bayar</th>
               <th>Bayaran</th>
               <th>Nama Pesanan</th>
               <th>Aksi</th>
            </tr>
            <?php
               $sql = "SELECT * FROM data_riwayat";
               $result = mysqli_query($conn, $sql);
               
               if (mysqli_num_rows($result) > 0) {
                   // Output data per baris
                   while($row = mysqli_fetch_assoc($result)) {
               ?>
            <tr>
               <td><?php echo $row["id_riwayat"]; ?></td>
               <td><?php echo $row["id_order"]; ?></td>
               <td><?php echo $row["nama_pelanggan"]; ?></td>
               <td><?php echo $row["waktu_bayar"]; ?></td>
               <td><?php echo number_format($row["bayaran"], 0, ",", "."); ?></td>
               <td><?php echo $row["nama_pesanan"]; ?></td>
               <td><a href="delete_riwayat.php?id_riwayat=<?php echo $row["id_riwayat"] ?>" class="btn btn-danger">Hapus</a>
            </tr>
            <?php
               }
               } else {
               echo "Tidak ada data";
               }
               ?>
               <tr>
               <td colspan="4">Total</td>
               <td colspan="3">
               <?php 
                    $result =$conn->query("SELECT SUM(bayaran) FROM data_riwayat");
                    $row = $result->fetch_assoc();
                    $total = $row['SUM(bayaran)'];                       
                    echo "Rp. " . number_format($total, 0, ",", ".");
                    ?>
                    </td>
                    </tr>
                    </table>

      </div>
   </body>
</html>
 