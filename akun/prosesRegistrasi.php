<?php
include("../koneksi.php");
$user = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);


$qrySelectRegis = mysqli_num_rows(mysqli_query($koneksi, "select *from user_login where username = '$user' || email = '$email'"));

if ($qrySelectRegis>0) {
    header("location:../index.php?pesan=sama");
}else{
  $qryRegistrasi = "INSERT INTO user_login (username, email, password) VALUES ('$user', '$email', '$password')";
  $eksRegistrasi = mysqli_query($koneksi, $qryRegistrasi);
  header("location:../index.php");
}
 ?>
