<?php 
session_start();

$id_item = $_GET['id_item'];
$id_member = $_SESSION['login'];
$tanggal = $_GET['tanggalboking'];
// $_POST['tanggal']=$tanggal;


$status_aktif = 0;
require '../../pdo/Keranjang.php';
$keranjang = new Keranjang();
$buat = $keranjang->create_keranjang($id_member, $id_item, $tanggal);

echo '<script>window.location.href="http://localhost/ta/member/index.php?page=tersedia&tanggal='.$tanggal.'"</script>';


?>