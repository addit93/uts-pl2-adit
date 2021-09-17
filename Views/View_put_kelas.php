<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_Kelas2.php';
// Membuat Object dari Class pegawai
$kelas = new Controller_Kelas();
$GetKelas = $kelas->GetData_Where($_GET['id_kelas']);
?>



<?php
    foreach($GetKelas as $Get){
?>
<h3> Ubah Data </h3>
<form action="../Config/Routes_Kelas2.php?function=put_kelas" method="POST">
Token : <input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/><br><br>
<table border="1">
        <input type="hidden" name="id_kelas" value="<?php echo $Get['id_kelas']; ?>">
    <tr>
        <td>Nama Kelas</td>
        <td><input type="text" name="nama_kelas" value="<?php echo $Get['nama_kelas']; ?>" required></td>
    </tr>
    <tr>
        <td>Kompetensi Keahlian</td>
        <td>
            <select name="kompetensi_keahlian">

                 <!-- Logic combo Get database -->
                 <option value="<?php echo $Get['kompetensi_keahlian']; ?>"> <?php echo $Get['kompetensi_keahlian']; ?> </option>
                <!-- Logic combo Get database -->

                <option value="Multimedia">Multimedia</option>
                <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Simpan"> <input type='button' onclick=location.href='../index.php?id=<?php echo base64_encode(2); ?>' value='Batal' /></td>
    </tr>
</table
</form>

<?php
    }
?>