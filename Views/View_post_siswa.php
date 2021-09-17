<?php


// Koneksi ke Database
include '../Config/Database.php';
$db = new Database();
$con= $db->Connect();


  // Memanggil fungsi dari CSRF
  include('../Config/Csrf.php');


?>
  
  
  

<h3> Tambah Data </h3>
<form name="form_input" action="../Config/Routes_Siswa2.php?function=create_siswa" method="POST">
Token : <input type="text" name="csrf_token" value="<?php echo CreateCSRF();?>"/><br><br>
<table border="1">
    <tr>
        <td>NISN</td>
        <td><input type="text" name="nisn" onkeypress="return event.charCode >= 48 && event.charCode <=57" required></td>
    </tr>
    <tr>
        <td>NIS</td>
        <td><input type="text" name="nis" onkeypress="return event.charCode >= 48 && event.charCode <=57" required></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" required></td>
    </tr>
    <tr>
        <td>Kelas</td>
        <td>

        <select name='kelas' required>
        <option value=''>- Harap pilih -</option>

        <?php
        // Mengambil data dari kelas dari database
        $query=mysqli_query($con,"select * from kelas");
        while($data=mysqli_fetch_array($query)){
        
            
        echo "<option value=$data[id_kelas]>"; echo $data['nama_kelas']; echo"  |  "; echo $data['kompetensi_keahlian'];   echo "</option>";
            
        }
        ?>
        
        </select>
        
        </td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td> <textarea name="alamat" rows="3" cols="40" required></textarea></td>
    </tr>
    <tr>
        <td>No. Telepon</td>
        <td><input type="no_telp" name="no_telp" onkeypress="return event.charCode >= 48 && event.charCode <=57" required></td>
    </tr>
    <tr>
    <td> Periode SPP </td>
    <td><input type="text" name="id_spp"></td>
    </tr>
    <tr>
        <td colspan="2" align="right"><input type="submit" name="proses" value="Simpan">  <input type='button' onclick=location.href='../index.php?id=<?php echo base64_encode(1); ?>' value='Batal' /></td>
    </tr>

</table
</form>