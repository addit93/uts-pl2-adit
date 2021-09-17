<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_spp2.php';
// Membuat Object dari Class pegawai
$spp = new Controller_spp();
$Getspp = $spp->GetData_Where($_GET['id_spp']);
?>



<?php
    foreach($Getspp as $Get){
?>
<h3> Ubah Data </h3>
<form action="../Config/Routes_spp2.php?function=put_spp" method="POST">
Token : <input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/><br><br>
<table border="1">
        <input type="hidden" name="id_spp" value="<?php echo $Get['id_spp']; ?>">
    <tr>
        <td>Tahun</td>
        <td><input type="text" name="tahun" value="<?php echo $Get['tahun']; ?>" required></td>
    </tr>
    <tr>
        <td>Nominal Rp</td>
        <td><input type="text" name="nominal" value="<?php echo $Get['nominal']; ?>" required></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Simpan"> <input type='button' onclick=location.href='../index.php?id=<?php echo base64_encode(3); ?>' value='Batal' /></td>
    </tr>
</table
</form>

<?php
    }
?>