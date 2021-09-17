<?php

  // Memanggil fungsi dari CSRF
  include('Csrf.php');


include '../Controllers/Controller_spp2.php';
 // Membuat Object dari Class pegawai
$db = new Controller_spp();

// Membuat variabel dari Get URL
$function = $_GET['function'];

// Decision variabel create
if($function == "create_spp"){

    // Validasi Token CSRF
    if(validation()==true)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
    {
        $db->POSTData(
            $_POST['id_spp'],
            $_POST['tahun'],
            $_POST['nominal']
        );
    }
    header("location:../index.php?id=Mw==");
}
// Decision variabel put
elseif($function == "put_spp"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['id_spp'],
            $_POST['tahun'],
            $_POST['nominal']
        );   
    }
    header("location:../index.php?id=Mw==");
}
// Decision variabel delete
elseif($function == "delete_spp"){
    $db->DELETEData($_GET['id_spp']);
    header("location:../index.php?id=Mw==");
}


?>