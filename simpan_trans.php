<html>
<head>
<link rel="stylesheet" type="text/css" href="template1.css">
</head>
<body>
<div id="image">
</div>
<div id="header">

<center>
<?php
include "koneksi.php";
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$qty = $_POST['qty'];
$harga_produk = $_POST['harga_produk'];
$id_cust = $_POST['id_cust'];
$tanggal = $_POST['tanggal'];

$sql_simpan = mysqli_query ($connect_db,"insert into jual
(id_produk, nama_produk, harga_produk, id_cust, qty, tanggal ) VALUES 
('$id_produk','$nama_produk','$harga_produk','$id_cust', '$qty', '$tanggal')");
if($sql_simpan) {
 echo "Data berhasil disimpan";
 
$sql_cek = mysqli_query($connect_db, "SELECT stok_produk FROM 
tersedia WHERE id_produk='$id_produk' LIMIT 1") or die(mysqli_error($connect_db));
 $row = mysqli_fetch_assoc($sql_cek);
 $stok_lama = $row['stok_produk'];
 $stok_baru = $stok_lama - $qty;
 
 $up_sql = mysqli_query($connect_db,"UPDATE tersedia set stok_produk=$stok_baru 
 WHERE id_produk='$id_produk' ") or die(mysqli_error($connect_db));
 if($up_sql<1)echo "Data gagal update";
} else {
 echo "Data gagal disimpan";
}
?>
<br>
 <b><a href="data_penjualan.php" > DATA PENJUALAN </a></b>
 </center>
 </div>
<div id="section">
<center> <h4> Menyimpan Data :D </h4>
</center>
</div>
<div id="footer">
<marquee >EL'STORE jl Wonosari Km 10 Yogyakarta</marquee>
</div>