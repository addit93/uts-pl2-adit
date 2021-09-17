<?php

  // Memanggil fungsi dari CSRF
  include('Csrf.php');


include '../Controllers/Controller_pembayaran2.php';
 // Membuat Object dari Class pegawai
$db = new Controller_pembayaran();

// Membuat variabel dari Get URL
$function = $_GET['function'];

// Decision variabel create
if($function == "create_pembayaran"){

    // Validasi Token CSRF
    if(validation()==true)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
    {
        $db->POSTData(
            $_POST['id_pembayaran'],
            $_POST['id_petugas'],
            $_POST['nisn'],
            $_POST['tgl_bayar'],
            $_POST['bulan_dibayar'],
            $_POST['tahun_dibayar'],
            $_POST['id_spp'],
            $_POST['jumlah_bayar']
        );
    }
    header("location:../index.php?id=NA==");
}
// Decision variabel put
elseif($function == "put_pembayaran"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['id_pembayaran'],
            $_POST['id_petugas'],
            $_POST['nisn'],
            $_POST['tgl_bayar'],
            $_POST['bulan_dibayar'],
            $_POST['tahun_dibayar'],
            $_POST['id_spp'],
            $_POST['jumlah_bayar']
        );   
    }
    header("location:../index.php?id=NA==");
}
// Decision variabel delete
elseif($function == "delete_pembayaran"){
    $db->DELETEData($_GET['id_pembayaran']);
    header("location:../index.php?id=NA==");
}


?>