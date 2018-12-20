<?php
session_start();
include("../koneksi.php");
$user = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$qrySelectRegis =mysqli_num_rows(mysqli_query($koneksi, "select *from user_login"));

if ($qrySelectRegis>0) {
  $_SESSION['salah'];
  header("location:../index.php?pesan=username_email_sama");
}else {
  $qryRegistrasi = "INSERT INTO user_login (username, email, password) VALUES ('$user', '$email', '$password')";
  $eksRegistrasi = mysqli_query($koneksi, $qryRegistrasi);
  header("location:../index.php");
}

 ?>
