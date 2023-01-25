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
      h3{
      text-align : center;
      }
      a{
      text-align : center;
      }
      .container{
      text-align : center;
      margin-top : 300px
      }
   </style>
   <body>
      <div class="container">
         <h1>
            <?php 
               require_once 'koneksi.php';
               
               $id = $_GET['id_riwayat'];
               
               $sql = "DELETE FROM data_pesanan WHERE id_order = '$id'";
               
               if(mysqli_query($conn,$sql)){
                  echo "Pemesanan Selesai";
                  
               }else{
                  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
               }
               ?>
         </h1>
         <a href="index.php" class="btn btn-info">Kembali</a>       
      </div>
   </body>
</html>