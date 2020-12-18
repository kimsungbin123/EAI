<?php
//koneksi ke database mysql
    include "config.php";
// membuat query/sql untuk mengambil data pegawai
    //$param = isset ($_POST['id']) ? $_POST['id'] : "";
    $sql = "SELECT * FROM laporanpengeluaran_gaji";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        $item[] = array(
            'id'=>$data["id"],
            'tanggal'=>$data["tanggal"],
            'nama_div'=>$data["namadivisi"],
            'ammount'=>$data["ammount"],
        );
    }

    $response = array(
        'status' => 'OK',
        'data' => $item
    );

    echo json_encode($response);
?>