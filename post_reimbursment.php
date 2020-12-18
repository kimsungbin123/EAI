<?php 
//koneksi ke database mysql
include "config.php";

//mendapatkan variabel post
$idpegawai = isset ($_POST['idpegawai']) ? $_POST['idpegawai'] : "";
$tanggal = isset ($_POST['tanggal']) ? $_POST['tanggal'] : "";
$namapegawai = isset ($_POST['namapegawai']) ? $_POST['namapegawai'] : "";
$kebutuhan = isset ($_POST['kebutuhan']) ? $_POST['kebutuhan'] : "";
$ammount = isset ($_POST['ammount']) ? $_POST['ammount'] : "";

//query menambahkan data
$sql = "INSERT INTO `laporanpengeluaran_reimbursment`(`idpegawai`, `tanggal`, `namapegawai`, `kebutuhan`, `ammount`)
VALUES ('".$idpegawai."', '".$tanggal."', '".$namapegawai."', '".$kebutuhan."', '".$ammount."');";
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