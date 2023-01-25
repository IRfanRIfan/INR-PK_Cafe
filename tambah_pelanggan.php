<?php
   require_once "koneksi.php";
   $sql = "SELECT * FROM `data_menu`";
   $result = mysqli_query($conn, $sql);
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Form Pesanan</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
      <style>
         body{
            background-color: #C19A6B;
            font-family: 'Montserrat', sans-serif;
         }

         .btn-primary{
            
            border-color: #A0522D;
            margin-left:35px;
         }
         .form-group{
            margin-left:35px;
            margin-top:20px;
         }
         .form-control{
            width: 900px;
            border-radius:25px;
         }

         .title{
            background-color: #F5F5DC;
            widht:500px
         }
         
         .container{
            background-color: white;
            border-radius:10px;
            height:550px;
            width: 1300px;
            padding:0px;
            margin-top:50px;
            
         }
         .textleft{
            color: black;
            background-attachment: fixed;
            background-color: #F5F5DC;
            border-radius:10px;
            height:70px;
            
         }
         
      </style>
   </head>
   <body>
   
      <div class="container">  
      <h1 class="textleft text-black">Form Pemesanan</h1>   
      <br>   
         <!-- =============== -->
         <form action="insert_pelanggan.php" method="post">
            <div class="form-group">
               <label for="nama_pelanggan" class="text-black">Nama Pelanggan:</label>
               <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" required autocomplete="off">
            </div>
          
            <div class="form-group">
               <label for="nama_pesanan" class="text-black">Nama Pesanan:</label>
               <select id="nama_pesanan" class="form-control" name="nama_pesanan" required>
                  <?php if (mysqli_num_rows($result) > 0) {
// Output data per baris
while ($row = mysqli_fetch_assoc($result)) { ?>
<option value="<?php echo $row["nama_menu"]; ?>"> <?php echo $row["nama_menu"]; ?></option>
<?php }
                  } ?>
</select>
<br>
</div>
<div class="form-group">
<label for="no_meja" class="text-black">No Meja:</label>
<input type="number" class="form-control" id="no_meja" name="no_meja" min="1" max="15" placeholder="Meja 1-15" required autocomplete="off">
</div>
<br>
<button type="submit" class="btn btn-primary">Tambahkan Pesanan</button>
</form>
</div>
<!-- ================= -->

   </body>
</html>