<?
	include("koneksi.php");
	$idDelete = $_GET['kdproduk'];
	$qryDelete = "delete from produk where id_produk = $idDelete";
	$eksekusiDelete = mysqli_query($koneksi, $qryDelete);
	header("location:produk.php");
?>
