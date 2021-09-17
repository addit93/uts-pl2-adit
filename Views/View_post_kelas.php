<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
?>
<h3> Tambah Data </h3>
<form name="form_input" action="../Config/Routes_Kelas2.php?function=create_kelas" method="POST">
Token : <input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/><br><br>
<table border="1">
    <tr>
        <td>Nama Kelas</td>
        <td><input type="text" name="nama_kelas" required></td>
    </tr>
    <tr>
        <td>Kompetensi Keahlian</td>
        <td>
            <select name="kompetensi_keahlian" required>
                <option value="">- Harap pilih -</option>
                <option value="Multimedia">Multimedia</option>
                <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Simpan">  <input type='button' onclick=location.href='../index.php?id=<?php echo base64_encode(2); ?>' value='Batal' /></td>
    </tr>

</table
</form>
