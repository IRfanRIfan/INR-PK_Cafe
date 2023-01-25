<?php 
   require_once 'koneksi.php';
   ?>
<html>
   <head>
      <link rel="stylesheet" href="css/style.css">
      <title>WEB MyCoffe </title>
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
      body{
         background-color : #C19A6B; 
         /* #e1e1e1; */
      }

      .container{
         border-radius: 10px;
         padding: 30px;
         background-color: #F5F5DC;
         margin-top: 50px;
         margin-bottom : 50px
      }
      .wel{
      /* color: #EDC9AF; */
      margin-top:35px;
      text-align:left;
      font-size: 40px;
      font-weight: bold;
      background-color: grey;
     
      margin-top:150px;
      /* border-right: 2px solid #000000;
      white-space: nowrap;
      overflow: hidden;
      animation: typing 2s steps(30, end); */
    }
    
    /* The animation code */
    @keyframes typing {
      from { width: 0; }
      to { width: 100%; }
         
      }
      .navbar{
         background-color:white;
         height:65px;
         width:1320px;
         padding: 9px;
         border-radius:9px;
         list-style: none;
         margin-top:40px;
         margin-left:100px;
         position: relative;

         display: flex;
         justify-content: space-between;
         align-items: center;
       
      
      }
      .navbar > ul > li{

         list-style: none;
         display:inline-block;
         margin-right: 20px;
      }
   svg {
    width: 50%;
    height: auto;
    max-width: 50px;
    max-height: 50px;
}

      
   </style>

   <body>
      <div class ="navbar">
         <ul>
            <li>
            <a href="#link1">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
            </svg>
            </a>
            </li>

            <li>
            <a href="#link2">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-fill-add" viewBox="0 0 16 16">
            <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
            <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
            </svg>
            </a>
            </li>

            <li> 
            <a href="#link3">
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
            <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
            <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
            <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
            </a>
            </li>

         </ul>
         
      </div>
  
      <div class="container">
         <h1 id ="link1" text-align="center">Daftar Menu</h1>
         <hr>
        
         <div class="row">
            <?php
               //tampilkan tabel data menu
                  $sql = "SELECT * FROM data_menu";
                  $result = mysqli_query($conn, $sql);
                  // perulangan tambpilan data
                  if (mysqli_num_rows($result) > 0) {
                      // Output data per baris
                      while ($row = mysqli_fetch_assoc($result)) {
                      ?>
            <div class="col-sm-4">
               <div class="card">
                  <img class="card-img-top img-fluid img-thumbnail" src="img/<?php echo $row["gambar"]?> " alt="Card image cap">
                  <div class="card-body">
                     <h5 class="card-title text-center card-header"><?php echo $row["nama_menu"]?></h5>
                     <p class="card-text text-center">Harga: <?php echo "Rp.".$row["harga"]?></p>
                     <p class="card-text text-center">Status: <?php if($row["tersedia"]== 1){ echo "Tersedia"; }else{echo "Tidak Tersedia";}?></p>
                     <div class="text-center card-footer">
                        <a href="edit.php?nama_menu=<?php echo $row['nama_menu']?>" class="btn btn-primary">Edit</a>
                        <a href="hapus_menu.php?nama_menu=<?php echo $row['nama_menu']?>" class="btn btn-danger">Hapus</a>
                     </div>
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
         </div>
         <div class="text-left">
            <br> <br>
            <a href="tambah.php" class="btn btn-warning" id ="link2">Tambahkan Menu</a>
         </div>
      </div>
      <div class="container">
         <h1>Daftar Pelanggan </h1>
         <hr>
         <table id="pelanggan" class="table table-bordered">
            <tr>
               <th scope="col">No</th>
               <th scope="col">Nama Pelanggan</th>
               <th scope="col">Nama Pesanan</th>
               <th scope="col">Harga</th>
               <th scope="col">No Meja</th>
               <th scope="col">Waktu</th>
               <th scope="col">Aksi</th>
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
               <td> Rp <?php echo $row["harga"]; ?></td>
               <td><?php echo $row["no_meja"];?></td>
               <td><?php echo $row["waktu_pemesanan"];?></td>
               <td>
                  <a href="sudahbayar.php?id_order=<?php echo $row['id_order']?>" class="btn btn-Success">Sudah Bayar</a>
                  <a href="edit_pelanggan.php?id_order=<?php echo $row['id_order']?>" class="btn btn-primary">Edit</a>
                  <a href="delete_pelanggan.php?id_order=<?php echo $row['id_order']?>" class="btn btn-danger">Hapus</a>
               </td>
            </tr>
            <?php
               }
               } else {
               // echo "Tidak ada data";
               }
               ?> 
         </table>
         <a href="tambah_pelanggan.php" class="btn btn-info"  id ="link3">Tambah Pelanggan</a>
      </div>
      <div class="container">
         <h1>Riwayat Pelanggan</h1>
         <hr>
         <table class="table table-striped">
            <tr>
               <!-- <th>ID Riwayat</th> -->
               <th>ID Order</th>
               <th>Nama Pelanggan</th>
               <th>Waktu Bayar</th>
               <th>Pembayaran</th>
               <th>Nama Pesanan</th>
               <th>Status</th>
            </tr>
            <?php
               $sql = "SELECT * FROM data_riwayat";
               $result = mysqli_query($conn, $sql);
               
               if (mysqli_num_rows($result) > 0) {
                   // Output data per baris
                   while($row = mysqli_fetch_assoc($result)) {
               ?>
            <tr>
               <!-- <td><?php echo $row["id_riwayat"]; ?></td> -->
               <td><?php echo $row["id_order"]; ?></td>
               <td><?php echo $row["nama_pelanggan"]; ?></td>
               <td><?php echo $row["waktu_bayar"]; ?></td>
               <td>Rp <?php echo number_format($row["bayaran"], 0, ",", "."); ?></td>
               <td><?php echo $row["nama_pesanan"]; ?></td>
               <td><a href="delete_riwayat.php?id_riwayat=<?php echo $row["id_riwayat"] ?>" class="btn btn-success">Selesai</a>
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