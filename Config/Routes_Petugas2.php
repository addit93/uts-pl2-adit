<?php

  // Memanggil fungsi dari CSRF
  include('Csrf.php');


include '../Controllers/Controller_Petugas2.php';
 // Membuat Object dari Class pegawai
$db = new Controller_petugas();


// Membuat variabel dari Get URL
$function = $_GET['function'];

// Decision variabel create
if($function == "create_petugas"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->POSTData(
            $_POST['id_petugas'],
            $_POST['username'],
            md5($_POST['password']),
            $_POST['nama_petugas'],
            $_POST['level']
        );
    }
    header("location:../index.php?id=NQ==");
}
// Decision variabel put
elseif($function == "put_petugas"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['id_petugas'],
            $_POST['username'],
            md5($_POST['password']),
            $_POST['nama_petugas'],
            $_POST['level']
        );   
    }
    header("location:../index.php?id=NQ==");
}
// Decision variabel delete
elseif($function == "delete_petugas"){
    $db->DELETEData($_GET['id_petugas']);
    header("location:../index.php?id=NQ==");
}


?>