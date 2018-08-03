<?php //ob_start();
include "koneksi.php";
$data=mysqli_query($connect_db, "delete from customer where id_cust='$_GET[id_cust]'");
header('location:data_cust.php');
 ?>