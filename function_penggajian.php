<?php
require 'config.php';

if (isset($_POST['submit'])) {

    $id=0;
    $tanggal = $_POST['tanggal'];
    $nama_div = $_POST['nama_div'];
    $ammount = $_POST['ammount'];

    $query = "INSERT INTO laporanpengeluaran_gaji (id,tanggal, namadivisi, ammount) 
    VALUES ('$id','$tanggal', '$nama_div', '$ammount')";
    $insert = mysqli_query($conn, $query);

}

?>