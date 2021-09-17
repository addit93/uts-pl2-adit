
<?php 

 // Membuat Object dari Class
include 'Controllers/Controller_siswa.php';
$siswa = new Controller_siswa();
$GetSiswa = $siswa->GetData_All();


// untuk mengecek di object $pegawai ada berapa banyak Property
//echo var_dump($pegawai);
?>



       
        <h2>Data Siswa</h2>
        <h4><a href="Views/View_post_siswa.php">Tambah Data</a></h4>

        <table border="1">
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>No. Telepon</th>
                <th>ID SPP</th>
                <th>Aksi</th>
            </tr>
            <?php
                // Decision validation variabel
                if(isset($GetSiswa))
                {
                        $no = 1;
                        foreach($GetSiswa as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['nisn']; ?></td>
                            <td><?php echo $Get['nis']; ?></td>
                            <td><?php echo $Get['nama']; ?></td>
                            <td><?php echo $Get['kelas']; ?></td>
                            <td><?php echo $Get['alamat']; ?></td>
                            <td><?php echo $Get['no_telp']; ?></td>
                            <td><?php echo $Get['id_spp']; ?></td>
                            <td>
                                <a href="Views/View_put_siswa.php?nisn=<?php echo $Get['nisn'] ?>">Ubah</a> |
                                <a href="Config/Routes_siswa2.php?function=delete_siswa&nisn=<?php echo $Get['nisn'] ?>" onclick="return confirm('Apakah anda mau menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>