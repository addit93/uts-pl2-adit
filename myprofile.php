<?php 

include 'Controllers/Controller_petugas.php';
 // Membuat Object dari Class pegawai
$petugas = new Controller_petugas();
$GetPetugas = $petugas->GetData_All();
$id_profile = $_SESSION['id_petugas'];

?>



           


<h3>My Profile</h3>

<h4><?php echo "Nama : ". $_SESSION['nama_petugas']; ?></h4>
<h4><?php echo "Username : ". $_SESSION['username']; ?></h4>
<h4><?php echo "Level : ". $_SESSION['level']; ?></h4>
<a href="Views/View_profile.php?id_petugas=<?php echo $id_profile ?>">Ubah username & password</a> 




