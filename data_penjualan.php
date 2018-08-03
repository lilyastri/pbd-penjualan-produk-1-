<html>
<head>
<link rel="stylesheet" type="text/css" href="template1.css">
</head>
<body>
<div id="image">
</div>
<div id="header">

<center><h2>DATA PENJUALAN</h2>
<table border="1">
 <tr><th>NO</th><th>Id Transaksi</th><th>Id Produk</th><th>Nama Produk</th><th>Qty</th><th>Harga Produk</th><th>Id Customer</th><th>Tanggal</th></tr>
 <?php
 include "koneksi.php";
 $data=mysqli_query($connect_db, "SELECT * from jual order by id_jual");
 if ($data === FALSE) {
 die(mysqli_error());
 }
 $no=1;
 while($hasil=mysqli_fetch_array($data)){ 
 
 echo "<tr>
 <td>$no</td>
 <td>$hasil[id_jual]</td>
 <td>$hasil[id_produk]</td>
 <td>$hasil[nama_produk]</td>
 <td>$hasil[qty]</td>
 <td>$hasil[harga_produk]</td>
 <td>$hasil[id_cust]</td>
 <td>$hasil[tanggal]</td> 
 </tr>";
 $no++;
 }
 ?>
</table>
<br>
 <b> <a href="index2.php" > MENU AWAL </a> </b>
</center>
</div>
<div id="section">
<center> <h4>EL'STORE</h4>
</center>
</div>
<div id="footer">
<marquee >EL'STORE jl Wonosari Km 10 Yogyakarta</marquee>
</div>