<?php
include "koneksi.php";

$id_produk = $_POST['id_produk']; 

$query = mysqli_query($connect_db, "SELECT * FROM tersedia WHERE id_produk='".$id_produk."'"); 
$row = mysqli_num_rows($query); 

if($row > 0){ 
  $data = mysqli_fetch_array($query); 
  

  $callback = array(
    'status' => 'success', 
    'nama_produk' => $data['nama_produk'], 
    'harga_produk' => $data['harga_produk'], 
    
  );
}else{
  $callback = array('status' => 'failed'); 
}

echo json_encode($callback); 
?>