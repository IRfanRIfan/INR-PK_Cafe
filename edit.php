<?php 
   require_once 'koneksi.php';
   $id = mysqli_real_escape_string($conn, $_GET['nama_menu']);
   $sql = "SELECT * FROM `data_menu` WHERE nama_menu = '$id'";
   $result = mysqli_query($conn, $sql);
   if ($result) {
       $row = mysqli_fetch_assoc($result);
       $nama_menu =  $row['nama_menu'];
       $gambar =  $row['gambar'];
       $harga =  $row['harga'];
       $tersedia =  $row['tersedia'];
   
   } else {
       echo "Error: " . mysqli_error($conn);
   }
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
      <title>Edit Data</title>
   </head>
   <body>
      <div class="container">
         <h1 class="text-center my-5">Edit Data</h1>
         <form method="post" action="update.php">
            <input type="hidden" id="id" name="id" value="<?php echo $id?>"readonly>
            <div class="form-group row">
               <label for="nama_menu" class="col-sm-2 col-form-label">Nama Menu:</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="<?php echo $nama_menu?>" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="harga" class="col-sm-2 col-form-label">Harga:</label>
               <div class="col-sm-10">
                  <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $harga?>" required>
               </div>
            </div>
            <div class="form-group row">
               <label for="tersedia" class="col-sm-2 col-form-label">Tersedia:</label>
               <div class="col-sm-10">
                  <select class="form-control" id="tersedia" name="tersedia" required>
                     <option value="1" <?php echo $tersedia == "1" ? 'selected' : ''; ?>>Tersedia</option>
                     <option value="0" <?php echo $tersedia == "0" ? 'selected' : ''; ?>>Tidak Tersedia</option>
                  </select>
               </div>
            </div>
            <div class="form-group row">
               <div class="col-sm-10">
                  <input type="submit" value="Edit" class="btn btn-primary">
               </div>
            </div>
         </form>
      </div>
   </body>
</html>