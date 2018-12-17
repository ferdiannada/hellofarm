<?php
  session_start();

  $kdproduk = $_GET['id'];

  if (isset($_SESSION['keranjang']['$kdproduk'])) {
    $_SESSION['keranjang'][$kdproduk] +=1;
  }else {
    $_SESSION['keranjang'][$kdproduk] = 1;
  }

 ?>
 <script>
   alert("Barang sudah masuk ke keranjang belanja");
   location="keranjang.php";
 </script>
