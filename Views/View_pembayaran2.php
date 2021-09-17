
<?php 

include 'Controllers/Controller_pembayaran.php';
 // Membuat Object dari Class pegawai
$pembayaran = new Controller_pembayaran();
$Getpembayaran = $pembayaran->GetData_All();

// untuk mengecek di object $pegawai ada berapa banyak Property
//echo var_dump($pegawai);
?>



       
        <h2>Data Pembayaran</h2>
        <h4><a href="Views/View_post_pembayaran.php">Tambah Data</a></h4>

        <table border="1">
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Tanggal Bayar</th>
                <th>Bulan Dibayar</th>
                <th>Tahun Dibayar</th>
                <th>ID SPP</th>
                <th>Jumlah dibayar</th>
                <th>Petugas</th>
                <th>Aksi</th>
            </tr>
            <?php
                // Decision validation variabel
                if(isset($Getpembayaran))
                {
                        $no = 1;
                        foreach($Getpembayaran as $Get){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $Get['nisn']; ?></td>
                            <td><?php echo $Get['tgl_bayar']; ?></td>
                            <td><?php echo $Get['bulan_dibayar']; ?></td>
                            <td><?php echo $Get['tahun_dibayar']; ?></td>
                            <td><?php echo $Get['id_spp']; ?></td>
                            <td><?php echo $Get['jumlah_bayar']; ?></td>
                            <td><?php echo $Get['id_petugas']; ?></td>
                            <td>
                                <a href="Views/View_put_pembayaran.php?id_pembayaran=<?php echo $Get['id_pembayaran'] ?>">Ubah</a> |
                                <a href="Config/Routes_pembayaran2.php?function=delete_pembayaran&id_pembayaran=<?php echo $Get['id_pembayaran'] ?>" onclick="return confirm('Apakah anda mau menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            ?>
        </table>