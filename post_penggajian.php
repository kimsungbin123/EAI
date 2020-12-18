<?php 
//koneksi ke database mysql
include "config.php";

//mendapatkan variabel post
$tanggal = isset ($_POST['tanggal']) ? $_POST['tanggal'] : "";
$namadivisi = isset ($_POST['namadivisi']) ? $_POST['namadivisi'] : "";
$ammount = isset ($_POST['ammount']) ? $_POST['ammount'] : "";

//query menambahkan data
$sql = "INSERT INTO `laporanpengeluaran_gaji`( `tanggal`, `namadivisi`, `ammount`)
VALUES ('".$tanggal."', '".$namadivisi."', '".$ammount."');";
echo $sql;

//Running Query
$query = mysqli_query($conn, $sql);
if($query){
    $msg = "Data successfully inserted";
}else{
    $msg = "Insert Data Failed";
}

echo $msg;
?>