<?php
// include_once("config.php");
// $insert = mysqli_query($conn, "SELECT * FROM laporangood_receipt ORDER BY id DESC");

$url = file_get_contents('https://warehouse-tubeseai.herokuapp.com/history_masuk');
$data = json_decode($url, true);

$url1 = file_get_contents('https://pronabil.herokuapp.com/transactions/history');
$data1 = json_decode($url1, true);

// var_dump($data1);
?>

<!DOCTYPE html>
<html>
<head>
	  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    

    <title>Penggajian</title>

<style>
body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 20px;
  margin-left: 50px;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="home1.php">Home</a>
  <a href="index_gr.php">Good Receipt</a>
  <a href="index_penggajian.php">Penggajian</a>
  <a href="index_reimbursment.php">Reimbursment</a>
  <a href="anggaran_gaji_dan_reimbursment.php">Anggaran Gaji dan Reimbursment</a>
  <a href="pelaporan_transaksi.php">Pelaporan Transaksi</a>
</div>


<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>



<h2 align="center">PELAPORAN TRANSAKSI PEMBELIAN MATERIAL</h2>
<br><br>

<div class="row">
  <div class="col-sm-6">
  <table class="table table-hover table-bordered" >
  <thead>
  <tr align="center">
  <th scope="col" colspan="4">Laporan Verifikasi Barang Masuk</th>
  </tr>
    <tr>
      <th scope="col">No</th>    
      <th scope="col">Tanggal</th>
      <th scope="col">Id Barang</th>
      <th scope="col">Jumlah</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $no = 1;
    foreach($data as $key => $value) { 
      echo "<tr>";
      $d=strtotime($value['date']);
      echo "<td>".$no++."</td>";
      echo "<td>".date("Y-m-d", $d)."</td>";
      echo "<td>".$value['id_barang']."</td>";
      echo "<td>".$value['jumlah']."</td>";
      echo "</tr>";
    }
    ?>    
  </tbody>
</table>
  </div>
  <div class="col-sm-6">
  <table class="table table-hover table-bordered" >
  <thead>
  <tr align="center">
  <th scope="col" colspan="5">Laporan History Pembelian</th>
  </tr>
    <tr>
      <th scope="col">No</th>    
      <th scope="col">Code</th>
      <th scope="col">Nama</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $no = 1;
    foreach($data1['data'] as $key => $value) { 
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$value['code']."</td>";
        echo "<td>".$value['name']."</td>";
        echo "<td>".$value['amount']."</td>";
        echo "<td>".$value['status']."</td>";
        echo "</tr>";

    }
  //   foreach($data as $key => $value) { 
  //     echo "<tr>";
  //     echo "<td>".$no++."</td>";
  //     echo "<td>".$value['date']."</td>";
  //     echo "<td>".$value['id_barang']."</td>";
  //     echo "<td>".$value['jumlah']."</td>";
  // }
    ?>
    
  </tbody>
</table>
  </div>
</div>



<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
     </body>
</html>