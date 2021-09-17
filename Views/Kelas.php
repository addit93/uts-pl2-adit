<?php

include '../Config/Database2.php';
$db = new Database2();
$con= $db->Connect();

?>



<select name='id_kelas' required>

<?php
        // Mengambil data dari kelas dari database
        $kelas = $Get['id_kelas'];
        $query=mysqli_query($con,"select * from kelas where id_kelas=$kelas");
        while($data2=mysqli_fetch_array($query)){

?>

        <option value='<?php echo $Get['id_kelas']; ?>'><?php echo $data2['nama_kelas']; echo"  |  "; echo $data2['kompetensi_keahlian'];  ?> </option>
<?php
        }
?>
        <?php
        // Mengambil data dari kelas dari database
        $query=mysqli_query($con,"select * from kelas");
        while($data=mysqli_fetch_array($query)){
        
            
        echo "<option value=$data[id_kelas]>"; echo $data['nama_kelas']; echo"  |  "; echo $data['kompetensi_keahlian'];   echo "</option>";
            
        }
        ?>
        
        </select>