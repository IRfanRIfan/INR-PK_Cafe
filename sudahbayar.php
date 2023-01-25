<?php
   require_once 'koneksi.php';

   $id = $_GET['id_order'];
    echo $id;
   $sql = "SELECT * FROM data_pesanan INNER JOIN data_menu ON data_pesanan.nama_pesanan = data_menu.nama_menu where id_order = $id";
   $result = mysqli_query($conn,$sql);
   if ($result) {
    $row = mysqli_fetch_assoc($result);
    $id_order =$row['id_order'];
    $nama_pelanggan =$row['nama_pelanggan'];
    $waktu_pemesanan =$row['waktu_pemesanan'];
    $nama_pesanan =$row['nama_pesanan'];
    $harga =$row['harga'];

    $waktu_bayar = date("Y-m-d H:i:s");
} else {
    echo "Error: " . mysqli_error($conn);
}

// input riwayat
$input = "INSERT INTO `data_riwayat`(`id_riwayat`, `id_order`, `nama_pelanggan`, `waktu_bayar`, `bayaran`, `nama_pesanan`) VALUES ('','$id_order','$nama_pelanggan','$waktu_bayar','$harga','$nama_pesanan')";
if (mysqli_query($conn, $input)) {
    echo "suda ta bayar";
    
}else {   
    echo "eror";
}

$hapus = "DELETE FROM data_pesanan WHERE id_order = $id";
if (mysqli_query($conn, $hapus)) {
    echo "berhasil";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    
}
header("Location: index.php");
?>