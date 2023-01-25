<!DOCTYPE html>
<html>
   <head>
      <title>Tambah Menu</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
      <style>
         body{
         background-color: #C19A6B;
         font-family: 'Montserrat', sans-serif;
         }
         .form-control{
         border-radius: 20px;
         }
         .btn-primary{
         border-radius: 20px;
         transition: all 0.2s ease-in-out;
         }
         .btn-primary:hover{
         background-color: black;
         color: #fff;
         
         }
         .form-group{
         padding: 25px;
         }
         #header{
         background-color: #F5F5DC;
         padding: 20px;
         text-align: left;
         border-radius:5px;
        
         }
         #header h1{
         color:black;
         font-size: 40px;
         }
         
         .btn btn-primary{
            margin-top: 150px;
         }
         
         .bg{
            background-color:white;
            margin:55px;
            border-radius:10px;
         }
         
      </style>
   </head>
   <body>

   <div class="bg">
      <div id="header">
         <h1>Tambah Menu</h1>
      </div>
      <div class="container">
         <form action="insert.php" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="form-group">
               <label for="nama_menu" class="col-sm-2 control-label">Nama Menu</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_menu" name="nama_menu" autocomplete="off">
               </div>
            </div>
            <div class="form-group">
               <label for="gambar" class="col-sm-2 control-label">Gambar</label>
               <div class="col-sm-10">
                  <input type="file" class="form-control" id="gambar" name="gambar" >
               </div>
            </div>
            <div class="form-group">
               <label for="harga" class="col-sm-2 control-label">Harga</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="harga" name="harga" autocomplete="off">
               </div>
            </div>
            <div class="form-group row justify-content-center my-4">
               <div class="col-sm-0">
                  <input type="submit" class="btn btn-info" value="Simpan">
               </div>
            </div>
            </div>
         </form>
         </div>
     
      <!-- <div id="footer"> -->
       
      </div>
   

   </body>
</html>