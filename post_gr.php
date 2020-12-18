<?php
    include "config.php";

    $tanggal = isset($_POST['tanggal']) ? $_POST["tanggal"]: "";
    //echo $tanggal;
    $nama = isset($_POST['nama']) ? $_POST['nama']: "";
    //echo $nama;
    $ammount = isset($_POST['ammount']) ? $_POST['ammount']: "";
    //echo $ammount;
    

    $sql = "INSERT INTO `laporangood_receipt` (`tanggal`, `nama`, `ammount`) 
    VALUES ('$tanggal', '$nama', '$ammount');";
    echo $sql;

    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Input Data Successfull";
    }else{
        $msg = "Input Data Failed";
    }

    echo $msg


?>