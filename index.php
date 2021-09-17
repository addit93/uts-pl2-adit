<?php

// Koneksi ke Database
 include 'Config/Database.php';
 $db = new Database();
 $con= $db->Connect();

 // Sesi untuk Login
 session_start();
    
    if (!isset($_SESSION['username'])){
        header("Location: login.php");
    }

// Pilihan untuk Menu
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
function content($id)
{
    $id_menu = base64_decode($id);
    if ($id_menu == 1) {
        $file = "Views/View_siswa.php";
    } elseif ($id_menu == 2) {
        $file = "Views/View_kelas.php";
        // $file = "latihan5.php";
    } elseif ($id_menu == 3) {
        $file = "Views/View_spp.php";
    } elseif ($id_menu == 4) {
        $file = "Views/View_pembayaran.php";
    } elseif ($id_menu == 5) {  
        $file = "Views/View_petugas.php";
    } elseif ($id_menu == 7) {  
        $file = "Views/View_detail_siswa.php";
    } elseif ($id_menu == 6) {  
        $file = "myprofile.php";
    } elseif ($id_menu == "") {
        $file = "dashboard.php";
    }
    return $file;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
    <h1> Sistem Pembayaran SPP Siswa </h1>
    <h2> SMK Bina Sejahtera 1 Kota Bogor</h2>
    <h3><?php echo "Petugas : ". $_SESSION['nama_petugas']; ?></h3>

    <?php
    // Menentukan akses data petugas hanya admin
    $level_petugas = $_SESSION['level'];
    If ($level_petugas == "Administrator") {
    echo "<a href='index.php?id="; echo base64_encode(5); echo "'>Lihat data petugas </a>";
    }
    else {
        echo "--------------------------------------------------------------------------------";
    }
    ?>
    <br><br>
    <table width="100%" height="100%" border="1">
        <tr height="5%">
            <td align="center">
                <h4>
                <a href="index.php?id=<?php echo base64_encode(4); ?>">Pembayaran</a> || 
                <a href="index.php?id=<?php echo base64_encode(3); ?>">Peiode SPP</a>  ||
                <a href="index.php?id=<?php echo base64_encode(1); ?>">Data Siswa</a>  || 
                <a href="index.php?id=<?php echo base64_encode(2); ?>">Data Kelas</a>  ||
                <a href="index.php?id=<?php echo base64_encode(6); ?>"> My profile </a> || 
                <a href="logout.php" onclick="return confirm('Apakah <?php echo $_SESSION[nama_petugas]; ?> mau logout?')">Logout</a> 
                </h4>
            </td>
        </tr>
        <tr height="95%">
            <td valign="top" align="center">
                <?php
                $file = content($_GET['id']);
                include "$file";
                ?>
                <br><br>
            </td>
        </tr>
    </table>
</center>
</body>
</html>