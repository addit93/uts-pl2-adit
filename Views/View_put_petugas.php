<?php 

  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');

include '../Controllers/Controller_Petugas2.php';
// Membuat Object dari Class pegawai
$petugas = new Controller_Petugas();
$GetPetugas = $petugas->GetData_Where($_GET['id_petugas']);
?>



<?php
    foreach($GetPetugas as $Get){
?>
<h3> Ubah Data </h3>
<form action="../Config/Routes_Petugas2.php?function=put_petugas" method="POST">
Token : <input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/><br><br>
<table border="1">
        <input type="hidden" name="id_petugas" value="<?php echo $Get['id_petugas']; ?>">
    <tr>
        <td>Username</td>
        <td><input type="text" name="username" value="<?php echo $Get['username']; ?>" required></td>
    </tr>
    <tr>
        <td>Password</td>
        <td>
        <input type="password" name="password" value="<?php echo $Get['password']; ?>" required></td>
        </td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>
        <input type="text" name="nama_petugas" value="<?php echo $Get['nama_petugas']; ?>" required></td>
        </td>
    </tr>
    <tr>
        <td>Level</td>
        <td>
            <select name="level">

                 <!-- Logic combo Get database -->
                 <option value="<?php echo $Get['level']; ?>"> <?php echo $Get['level']; ?> </option>
                <!-- Logic combo Get database -->

                <option value="Administrator">Administrator</option>
                <option value="Petugas">Petugas</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Simpan"> <input type='button' onclick=location.href='../index.php?id=<?php echo base64_encode(6); ?>' value='Batal' /></td>
    </tr>
</table
</form>

<?php
    }
?>