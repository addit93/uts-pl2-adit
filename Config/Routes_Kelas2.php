<?php

  // Memanggil fungsi dari CSRF
  include('Csrf.php');


include '../Controllers/Controller_Kelas2.php';
 // Membuat Object dari Class pegawai
$db = new Controller_Kelas();

// Membuat variabel dari Get URL
$function = $_GET['function'];

// Decision variabel create
if($function == "create_kelas"){

    // Validasi Token CSRF
    if(validation()==true)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
    {
        $db->POSTData(
            $_POST['id_kelas'],
            $_POST['nama_kelas'],
            $_POST['kompetensi_keahlian']
        );
    }
    header("location:../index.php?id=Mg==");
}
// Decision variabel put
elseif($function == "put_kelas"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['id_kelas'],
            $_POST['nama_kelas'],
            $_POST['kompetensi_keahlian']
        );   
    }
    header("location:../index.php?id=Mg==");
}
// Decision variabel delete
elseif($function == "delete_kelas"){
    $db->DELETEData($_GET['id_kelas']);
    header("location:../index.php?id=Mg==");
}


?>