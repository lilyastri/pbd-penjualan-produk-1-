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


$nama_cust = $_POST['nama_cust'];
$alamat_cust = $_POST['alamat_cust'];
$noktp_cust = $_POST['noktp_cust'];

$sql_simpan = mysqli_query($connect_db, "INSERT into customer 
(nama_cust, alamat_cust, noktp_cust) VALUES ('$nama_cust', '$alamat_cust', '$noktp_cust')");
if($sql_simpan) {
 echo "Data berhasil disimpan";
} else {
 echo "Data gagal disimpan";
}
?>
<br>
<a href="transaksi_form.php" > TRANSAKSI </a>
</center> 
 </div>
<div id="section">
<center> <h4>Menyimpan Data :D</h4>
</center>
</div>
<div id="footer">
<marquee >EL'STORE jl Wonosari Km 10 Yogyakarta</marquee>
</div>