<?php 
	include 'koneksi.php';
	
 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Data Pesanan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<div class="all">
 	<div class="head">
 		<h1>Restoran</h1>
 	</div>

 	
    <div class="box">
        <h2 style="text-align: center;margin-top: 30px; margin-bottom: 25px">Tambah Menu Makanan</h2>
 	<table>
        <form action="proses.php?aksi=tambahwedding" method="post">
            <tr>
                <td>paket: </td>
                <td><input type="text" name="paket"></td>
            </tr>
            <tr>
                <td>tahun : </td>
                <td><input type="date" name="tahun"></td>
            </tr>
            <tr>
                <td>harga : </td>
                <td><input type="number" name="harga"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </form>
    </table>
    </div>
    </div>
 </body>
 </html>
