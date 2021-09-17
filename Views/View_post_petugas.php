<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
?>
<h3> Tambah Data </h3>
<form name="form_input" action="../Config/Routes_Petugas2.php?function=create_petugas" method="POST">
Token : <input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/><br><br>
<table border="1">
    <tr>
        <td>Username</td>
        <td><input type="text" name="username" required></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type="password" name="password" required></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama_petugas" required></td>
    </tr>
    <tr>
        <td>Level</td>
        <td>
            <select name="level" required>
                <option value="">- Harap pilih -</option>
                <option value="Administrator">Administrator</option>
                <option value="Petugas">Petugas</option>
            </select>
        </td>
    </tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Simpan">  <input type='button' onclick=location.href='../index.php?id=<?php echo base64_encode(5); ?>' value='Batal' /></td>
    </tr>
</table
</form>
