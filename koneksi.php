<?php
function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "db_WO";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Koneksi Gagal: " . mysqli_connect_error());
    }
    return $conn;
}

/** fungsi untuk menampilkan data wedding */
function wedding() {
    $conn = connect();
    $sql = "SELECT * FROM wedding";
    $result = mysqli_query($conn,$sql);
    //biar ketika data di table wedding kosong, $rows tidak undefined
    $rows = [];
    while ($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}

function cost() {
    $conn = connect();
    $sql = "SELECT * FROM pelanggan";
    $result = mysqli_query($conn,$sql);
    
    $rows = [];
    while ($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}

function trans() {
    $conn = connect();
    $sql = "SELECT transaksi.id_transaksi, transaksi.harga, transaksi.total_pembayaran,transaksi.biaya_admin, pelanggan.id_pelanggan,pelanggan.nama_pelanggan, wedding.id_wedding, wedding.paket FROM pelanggan INNER JOIN transaksi on pelanggan.id_pelanggan = transaksi.id_pelanggan INNER JOIN wedding on wedding.id_wedding = transaksi.id_wedding ORDER BY id_transaksi";
    $result = mysqli_query($conn,$sql);
    
    $rows = [];
    while ($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>