<?php
  session_start();
  $id_produk=$_GET['id'];
  unset($_SESSION['keranjang'][$id_produk])

 ?>
 <script>
   alert("produk di hapus dari keranjang");
   location="keranjang.php";
 </script>
