<?php
require 'config.php';

if (isset($_POST['submit'])) {

    
    $tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : "";
    $nama_pegawai = isset($_POST['nama_pegawai']) ? $_POST['nama_pegawai'] : "";
    $id_pegawai = isset($_POST['id_pegawai']) ? $_POST['id_pegawai'] : "";
    $kebutuhan = isset($_POST['kebutuhan']) ? $_POST['kebutuhan'] : "";
    $ammount = isset($_POST['ammount']) ? $_POST['ammount'] : "";

    $query = "INSERT INTO 'laporanpengeluaran_reimbursment' ('idpegawai', 'tanggal', 'namapegawai', 'kebutuhan', 'ammount')
                VALUES ('".$id_pegawai."', '".$tanggal."', '".$nama_pegawai."', '".$kebutuhan."', '".$ammount."');";
    $insert = mysqli_query($conn, $query);



}

?>