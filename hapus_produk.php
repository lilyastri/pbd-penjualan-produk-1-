<?php //ob_start();
include "koneksi.php";
$data=mysqli_query($connect_db, "delete from tersedia where id_produk='$_GET[id_produk]'");
header('location:list_barang.php');
 ?>