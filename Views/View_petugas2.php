<?php 

include '../Controllers/Controller_petugas.php';
 // Membuat Object dari Class pegawai
$petugas = new Controller_petugas();
$GetPetugas = $petugas->GetData_All();

// untuk mengecek di object $pegawai ada berapa banyak Property
//echo var_dump($pegawai);
?>


       
        <h2>Data Petugas</h2>
        <h3><a href="View_post_petugas.php">Tambah Data</a></h3>


        <table border="1">
            <tr>
                <th>No</th>
                <th>Username</th>
                <th>Nama</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
            <?php
                // Decision validation variabel
                if(isset($GetPetugas))
                {
                        $no = 1;
                        foreach($GetPetugas as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['username']; ?></td>
                            <td><?php echo $Get['nama_petugas']; ?></td>
                            <td><?php echo $Get['level']; ?></td>
                            <td>
                                <a href="../Views/View_put_petugas.php?id_petugas=<?php echo $Get['id_petugas'] ?>">Ubah</a> |
                                <a href="../Config/Routes_Petugas.php?function=delete_petugas&id_petugas=<?php echo $Get['id_petugas'] ?>" onclick="return confirm('Apakah anda mau menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>