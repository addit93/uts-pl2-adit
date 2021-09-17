
<?php 

include 'Controllers/Controller_kelas.php';
 // Membuat Object dari Class pegawai
$kelas = new Controller_kelas();
$GetKelas = $kelas->GetData_All();

// untuk mengecek di object $pegawai ada berapa banyak Property
//echo var_dump($pegawai);
?>



       
        <h2>Data Kelas</h2>
        <h4><a href="Views/View_post_kelas.php">Tambah Data</a></h4>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Kelas</th>
                <th>Kompetensi Keahlian</th>
                <th>Aksi</th>
            </tr>
            <?php
                // Decision validation variabel
                if(isset($GetKelas))
                {
                        $no = 1;
                        foreach($GetKelas as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['nama_kelas']; ?></td>
                            <td><?php echo $Get['kompetensi_keahlian']; ?></td>
                            <td>
                                <a href="Views/View_put_kelas.php?id_kelas=<?php echo $Get['id_kelas'] ?>">Ubah</a> |
                                <a href="Config/Routes_kelas2.php?function=delete_kelas&id_kelas=<?php echo $Get['id_kelas'] ?>" onclick="return confirm('Apakah anda mau menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>