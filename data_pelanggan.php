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
        <th>id pelanggan</th>
        <th>nama pelanggan</th>
        <th>no hp</th>
        <th>email</th>
        <th>alamat</th>
     </tr>
     <?php foreach (cost() as $row){ ?>
    <tr>
    <td><?= $row['id_pelanggan']?></td>
    <td><?= $row['nama_pelanggan']?></td>
    <td><?= $row['no_hp']?></td>
    <td><?= $row['email']?></td>
    <td><?= $row['alamat']?></td>
    
    </tr>
  <?php } ?>
     </table>
</body>
</html>