<?php
require "koneksi.php";
$sql = "SELECT  transaksi";
$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .i{
          width: 50%;
          margin: auto;
          border-collapse: collapse;
        }
        th, td {
          border: 1px solid  black;
        }
        
  
        </style>
</head>
<body>
   <table class="i">
     <tr>
        <th>id transaksi</th>
        <th>nama pelanggan</th>
        <th>id wedding</th>
        <th>harga</th>
        <th>biaya admin</th>
        <th>total harga</th>
     </tr>
     <?php foreach (trans() as $row){ ?>
      
        
    <tr>
    <td><?= $row['id_transaksi']?></td>
    <td><?= $row['nama_pelanggan']?></td>
    <td><?= $row['id_wedding']?></td>
    <td><?= $row['harga']?></td>
    <td><?= $row['biaya_admin']?></td>
    <td><?= $row['total_pembayaran']?></td>
    </tr>
  <?php } ?>
     </table>
</body>
</html>