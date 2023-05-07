<html>
  <head>
    <title>web nacro wedding</title>
    <!--menghubungkan dengan css-->
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--menghubungkan dengan file jquery-->
    <script type="text/javascript" src="jquerty.js"></script>
  </head>
  <bbody>
    <div class="content">
      <header>
        <h1 class="judul">web wedding</h1>
        <h3 class="deskripsi">toko online jasa wedding organizer</h3>
      </header>
      
      <div class="menu">
        <ul>
         <li><a href="index.php?page=wedding">wedding</a></li>
         <li><a href="index.php?page=pelanggan">pelanggan</a></li>
         <li><a href="index.php?page=transaksi">transaksi</a></li>
         <li><a href="index.php?page=tamwed">tambah data wedding</a></li>
         
      </div>
      
      <div class="badan">
        
        
        <?php
        if(isset($_GET['page'])){
        $page = $_GET['page'];
        
        switch ($page) {
        case 'wedding':
          include "data_wedding.php";
          break;
        case 'pelanggan':
          include "data_pelanggan.php";
          break;
          case 'transaksi':
          include "data_transaksi.php";  
          break;  
          case 'tamwed':
            include "tambahwedding.php";  
        }
        }
        
         ?>
      </div>
    </div>
  </body>
</html>
