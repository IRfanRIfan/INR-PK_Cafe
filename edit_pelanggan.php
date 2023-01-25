<?php 
   require_once 'koneksi.php';
   
   $id_order = $_GET['id_order'];
   
   $ambil = "SELECT * FROM data_pesanan WHERE id_order = '$id_order'";
   $hasel = mysqli_query($conn,$ambil);
   if($hasel){
       $r = mysqli_fetch_assoc($hasel);
       $nama_pelanggan = $r['nama_pelanggan'];
       $nama_pesanan = $r['nama_pesanan'];
       $no_meja = $r['no_meja'];
       $waktu = date("Y-m-d H:i:s");;
   
   }
   
   ?>
<!DOCTYPE html>
<html>
   <head>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
   </head>
   <style>
      #id_order{
      display : none;
      }
   </style>
   <body>
  <div class="container">
    <h2 class="text-center">Edit Data <?php echo $nama_pelanggan?></h2>
    <form action="update_pelanggan.php" method="post" class="mx-auto" style="width: 80%;">
      <input id="id_order" type="number" name="id_order" value="<?php echo $id_order ?>" readonly class="form-control">
      <div class="form-group">
        <label for="nama_pelanggan">Nama Pelanggan:</label>
        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?php echo $nama_pelanggan ?>" required>
      </div>
      <div class="form-group">
        <label for="nama_pesanan">Nama Pesanan:</label>
        <select id="nama_pesanan" class="form-control" value="<?php echo $nama_pesanan ?>" name="nama_pesanan" required>
          <?php 
            $a = "SELECT * FROM `data_menu`";
            $b = mysqli_query($conn, $a);
            if (mysqli_num_rows($b) > 0) {
              while ($row = mysqli_fetch_assoc($b)) { ?>
                <option value="<?php echo $row["nama_menu"]; ?>"> <?php echo $row["nama_menu"]; ?></option>
              <?php }
            } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="no_meja">No Meja:</label>
        <input value="<?php echo $no_meja ?>" type="number" class="form-control" id="no_meja" name="no_meja" min="1" max="15" placeholder="meja 1-15" required>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
  </div>
</body>
