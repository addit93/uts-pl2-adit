
<?php 

include 'Controllers/Controller_spp.php';
 // Membuat Object dari Class pegawai
$spp = new Controller_spp();
$Getspp = $spp->GetData_All();

// untuk mengecek di object $pegawai ada berapa banyak Property
//echo var_dump($pegawai);
?>



       
        <h2>Data Peiode SPP</h2>
        <h4><a href="Views/View_post_spp.php">Tambah Data</a></h4>

        <table border="1">
            <tr>
                <th>No</th>
                <th>Tahun</th>
                <th>Nominal</th>
                <th>Aksi</th>
            </tr>
            <?php
                // Decision validation variabel
                if(isset($Getspp))
                {
                        $no = 1;
                        foreach($Getspp as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['tahun']; ?></td>
                            <td><?php echo $Get['nominal']; ?></td>
                            <td>
                                <a href="Views/View_put_spp.php?id_spp=<?php echo $Get['id_spp'] ?>">Ubah</a> |
                                <a href="Config/Routes_spp2.php?function=delete_spp&id_spp=<?php echo $Get['id_spp'] ?>" onclick="return confirm('Apakah anda mau menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>