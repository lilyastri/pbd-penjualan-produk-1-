<?php

//Ini untuk koneksi 
$user_name = "root";
$password  = "";
$database  = "sale"; 
$host_name = "localhost";
 
$connect_db=mysqli_connect($host_name, $user_name, $password);
$hasil=mysqli_select_db($connect_db,$database) or die ("Gagal konek database");
?>


