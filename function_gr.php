<?php
include 'config.php';

if (isset($_POST['submit'])) {

  $id = 0;
  $tanggal = $_POST['tanggal'];
  $nama = $_POST['nama'];
  $ammount = $_POST['ammount'];
  

  $query = "INSERT INTO laporangood_receipt (id, tanggal, nama, ammount) VALUES ('$id', '$tanggal', '$nama', '$ammount')";
  $insert = mysqli_query($conn, $query);

}


?>