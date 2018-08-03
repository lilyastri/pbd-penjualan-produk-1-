<html>
<center>
<head>
	<link rel="stylesheet" type="text/css" href="template2.css">
    <title> FORM TRANSAKSI </title>
    <script src="jquery-2.2.4.min.js"></script> <!-- Load library jquery -->
    <script src="proses.js"></script> <!-- Load file process.js -->
	
</head>
<body>
<div id="image">
</div>
<div id="header">
<center> <h1>FORM TRANSAKSI JUAL</h1><hr>
	<form action="simpan_trans.php" method="post" enctype="multipart/form-data" >
<table>   
  <tr>
    <td>TANGGAL</td>
    <td>:</td>
    <td><input type="date" name="tanggal" id="tanggal"></td>
  </tr>
  <tr>
    <td>ID PRODUK</td>
    <td>:</td>
    <td><input type="text" name="id_produk" id="id_produk"> <button type="button" id="btn-search">Cari</button> <span id="loading">LOADING...</span></td>
  </tr>
  <tr>
    <td>NAMA PRODUK</td>
    <td>:</td>
    <td><input type="text" name="nama_produk" id="nama_produk"></td>
  </tr>
        <tr>
    <td>QTY</td>
    <td>:</td>
    <td><input type="text" name="qty" id="qty" ></td> 
  </tr>
    <tr>
    <td>HARGA PRODUK</td>
    <td>:</td>
    <td><input type="text" name="harga_produk" id="harga_produk" ></td>
  </tr>
      <tr>
    <td>ID CUSTOMER</td>
    <td>:</td>
    <td><input type="text" name="id_cust" id="id_cust"></td>
  </tr>
    <tr>
    <td><input type="submit" value="SIMPAN" name="proses" /></td></td>
  </tr>
</table>
</center>
<br>
	<center> <b> <a href="index2.php" > MENU AWAL </a> </b> </center>  <br>
    <center> <b> <a href="data_cust.php" > DATA CUST </a> </b> </center> 
</form>
</body>
</center> 
</div>
<div id="section">
<center> <h4>EL'STORE</h4>
</center>
</div>
<div id="footer">
<marquee >EL'STORE jl Wonosari Km 10 Yogyakarta</marquee>
</div>
</html>