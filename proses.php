<?php 
include 'koneksi.php';


$aksi = $_GET['aksi'];

// Proses motor
if($aksi == "tambahwedding") {
    $dbname->tambahwedding( $_POST['paket'], $_POST['tahun'], $_POST['harga']);
    header("location:data_wedding.php");
}
// proses pelanggan
if($aksi == "tambahpelanggan") {
    $db_josua->tambahpelanggan($_POST['nama_pelanggan'], $_POST['no_hp'], $_POST['email'], $_POST['alamat']);
    header("location:data_pelanggan.php");
}

// proses transaksi
if($aksi == "tambahtransaksi") {
    $db_josua->tambahtransaksi($_POST['id_motor'], $_POST['id_pelanggan'], $_POST['kuantitas'], $_POST['harga'], $_POST['total_pembayaran']);
    header("location:data_transaksi.php");
}
?>
