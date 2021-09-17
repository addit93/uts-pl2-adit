<?php

  // Memanggil fungsi dari CSRF
  include('Csrf.php');


include '../Controllers/Controller_Siswa2.php';
 // Membuat Object dari Class pegawai
$db = new Controller_Siswa();

// Membuat variabel dari Get URL
$function = $_GET['function'];

// Decision variabel create
if($function == "create_siswa"){

    // Validasi Token CSRF
    if(validation()==true)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
    {
        $db->POSTData(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['id_kelas'],
            $_POST['alamat'],
            $_POST['no_telp'],
            $_POST['id_spp']
        );
    }
    header("location:../index.php?id=MQ==");
}
// Decision variabel put
elseif($function == "put_siswa"){

    // Validasi Token CSRF
    if(validation()==true)
    {
        $db->PUTData(
            $_POST['nisn'],
            $_POST['nis'],
            $_POST['nama'],
            $_POST['id_kelas'],
            $_POST['alamat'],
            $_POST['no_telp'],
            $_POST['id_spp']
        );   
    }
    header("location:../index.php?id=MQ==");
}
// Decision variabel delete
elseif($function == "delete_siswa"){
    $db->DELETEData($_GET['nisn']);
    header("location:../index.php?id=MQ==");
}


?>