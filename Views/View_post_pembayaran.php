<?php
  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');
?>
<h3> Tambah Data </h3>
<form name="form_input" action="../Config/Routes_pembayaran2.php?function=create_pembayaran" method="POST">
Token : <input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/><br><br>
<table border="1">
    <tr>
        <td>NISN</td>
        <td><input type="text" name="nisn" onkeypress="return event.charCode >= 48 && event.charCode <=57" required></td>
    </tr>
    <tr>
        <td>Tanggal Dibayar</td>
        <td><input type="text" name="tgl_bayar" onkeypress="return event.charCode >= 48 && event.charCode <=57" required></td>
    </tr>
    <tr>
        <td>Bulan Dibayar</td>
        <td>
            <select name="bulan_dibayar" required>
                <option value="">- Harap pilih -</option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>Tahun Dibayar </td>
        <td><input type="text" name="tahun_dibayar" onkeypress="return event.charCode >= 48 && event.charCode <=57" required></td>
    </tr>
    <tr>
        <td>Periode SPP</td>
        <td><input type="text" name="id_spp" orequired></td>
    </tr>

    <input type="hidden" name="id_petugas" value="<?php echo $Get['id_petugas']; ?>">
    
    <tr>
        <td>Jumlah Pembayaran Rp</td>
        <td><input type="text" name="jumlah_bayar" onkeypress="return event.charCode >= 48 && event.charCode <=57" required></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Simpan">  <input type='button' onclick=location.href='../index.php?id=<?php echo base64_encode(4); ?>' value='Batal' /></td>
    </tr>

</table
</form>
