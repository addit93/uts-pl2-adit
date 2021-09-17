<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
?>
<h3> Tambah Data </h3>
<form name="form_input" action="../Config/Routes_spp2.php?function=create_spp" method="POST">
Token : <input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/><br><br>
<table border="1">
    <tr>
        <td>Tahun</td>
        <td><input type="text" name="tahun" onkeypress="return event.charCode >= 48 && event.charCode <=57" required></td>
    </tr>
    <tr>
        <td>Nominal Rp</td>
        <td><input type="text" name="nominal" onkeypress="return event.charCode >= 48 && event.charCode <=57" required></td>
    </tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Simpan">  <input type='button' onclick=location.href='../index.php?id=<?php echo base64_encode(3); ?>' value='Batal' /></td>
    </tr>

</table
</form>
