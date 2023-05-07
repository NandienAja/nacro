<?php 
require 'koneksi.php';

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
        <th>id wedding</th>
        <th>paket</th>
        <th>tahun</th>
        <th>harga</th>

     </tr>
     <?php foreach (wedding() as $row){ ?>
    <tr>
    <td><?= $row['id_wedding']?></td>
    <td><?= $row['paket']?></td>
    <td><?= $row['tahun']?></td>
    <td><?= $row['harga']?></td>
     </tr>
  <?php } ?>
     </table>
</body>
</html>