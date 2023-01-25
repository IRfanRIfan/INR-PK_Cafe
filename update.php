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
   </style>
   <body>
      <div class="container">
         <h3>
            <?php 
               require_once 'koneksi.php';
               $nama_menu = $_POST['nama_menu'];
               $id = $_POST['id'];
               echo $id;
               $harga = $_POST['harga'];
               $tersedia = $_POST['tersedia'];
               $sql = "UPDATE `data_menu` SET `nama_menu` = '$nama_menu',`harga`='$harga',  `tersedia` = '$tersedia' WHERE `nama_menu` = '$id'";
               
                   
               if (mysqli_query($conn, $sql)) {
                   echo "Data Teredit";
                   header("Location: index.php");
               }else{
                   echo "\n : Tidak dapat mengganti nama menu karena terdaftar dalam pemesanan";
                   // echo "Error: " . $sql . "<br>" . mysqli_error($conn);
               }
               
               ?>
         </h3>
         <br>
         <div id="tombol">
         </div>
      </div>
   </body>
</html>