<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_Siswa2.php';
// Membuat Object dari Class pegawai
$siswa = new Controller_Siswa();
$GetSiswa = $siswa->GetData_Where($_GET['nisn']);

// Koneksi ke Database
include '../Config/koneksi.php';

?>



<?php
    foreach($GetSiswa as $Get){
?>
<h3> Ubah Data </h3>
<form action="../Config/Routes_Siswa2.php?function=put_siswa" method="POST">
Token : <input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/><br><br>
<table border="1">
        <input type="hidden" name="nisn" value="<?php echo $Get['nisn']; ?>">
    <tr>
        <td>NISN</td>
        <td><input type="text" name="nisn" value="<?php echo $Get['nisn']; ?>" required></td>
    </tr>
    <tr>
        <td>NIS</td>
        <td>
        <input type="text" name="nis" value="<?php echo $Get['nis']; ?>" required></td>
        </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>
        <input type="text" name="nama" value="<?php echo $Get['nama']; ?>" required></td>
        </td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>
            <?php include '../Views/Kelas.php'; ?>
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td> <textarea name="alamat" rows="3" cols="40" required><?php echo $Get['alamat']; ?></textarea></td>
    </tr>
    <tr>
        <td>No. Telepon</td>
        <td>
        <input type="text" name="no_telp" value="<?php echo $Get['no_telp']; ?>" required></td>
        </td>
    </tr>
    <tr>
        <td>Periode SPP</td>
        <td>
        <input type="text" name="id_spp" value="<?php echo $Get['id_spp']; ?>"></td>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Simpan"> <input type='button' onclick=location.href='../index.php?id=<?php echo base64_encode(1); ?>' value='Batal' /></td>
    </tr>
</table
</form>

<?php
    }
?>