<?php


if (isset($_POST['submit'])) {
    include 'api_consume.php';

//   $id=0;
  $sender_name = $_POST['sender_name'];
  $income_budget = $_POST['income_budget'];
  $intended_for = $_POST['intended_for'];
  $date = $_POST['date'];

    $data_array =  array(
        "sender_name"  => $sender_name,
        "income_budget"  => $income_budget,
        "intended_for"  => $intended_for,
        "date"  => $date
  );
  $make_call = callAPI('POST', 'https://penabil-api.herokuapp.com/api/income-budget', json_encode($data_array));
  $response = json_decode($make_call, true);

  echo $response['status'];
  if ($response['status'] == true) {
    header('Location: anggaran_gaji_dan_reimbursment.php?status=berhasil');
  } else {
    header('Location: anggaran_gaji_dan_reimbursment.php?status=gagal');
  }
  
    // var_dump($response);


// $ch = curl_init('https://penabil-api.herokuapp.com/api/income-budget');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// // execute!
// $response = curl_exec($ch);

// // close the connection, release resources used
// curl_close($ch);

// // do anything you want with your response
// var_dump($response);
};
?>

<?php

//  include 'config.php';
//  include 'api_consume.php';

//  $transaction_detail = $_POST['transaction_detail'];
//  $query = "SELECT * FROM transactions_detail JOIN vendor_products ON transactions_detail.vendor_product_id = vendor_products.id WHERE transactions_detail.id = '$transaction_detail'";
//  $result_query = mysqli_query($conn, $query);

//  $master = mysqli_fetch_assoc($result_query);

//  $barang = consume('https://penabil-api.herokuapp.com/api/income-budget' . $master['barang_id']);

//  $sender_name = $sender_name[0]['sender_name'];
//  $income_budget = $income_budget [0]['income_budget'];
//  $intended_for = $intended_for[0]['intended_for'];
//  $date = date("Y-m-d");

//  $request = compact('sender_name', 'income_budget', 'intended_for','date');

?>