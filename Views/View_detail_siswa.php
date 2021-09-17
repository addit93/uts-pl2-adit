
<?php 

include 'Config/Database2.php';
$db = new Database2();
$con= $db->Connect();


include 'Controllers/Controller_pembayaran_siswa.php';
 // Membuat Object dari Class pegawai
$pembayaran = new Controller_pembayaran();
$Getpembayaran = $pembayaran->GetData_All();

// untuk mengecek di object $pegawai ada berapa banyak Property
//echo var_dump($pegawai);
?>



       
        <h2>Detail transaksi siswa</h2>

        <a href="index.php?id=<?php echo base64_encode(1); ?>">Kembali ke Data Siswa</a>
        <br>
        <br>

        <table border="1">
            <tr>
                <th>No</th>
                <th>NISN</th>
                <th>Tanggal Bayar</th>
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

                             // Mengambil data dari kelas dari database
                            $nisn = $_GET['nisn'];
                            $query=mysqli_query($con,"select * from pembayaran where nisn=$nisn");
                            while($data=mysqli_fetch_array($query)){
                        ?>

                        
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $data['nisn']; ?></td>
                            <td><?php echo $data['tgl_bayar']; ?> <?php echo $data['bulan_dibayar']; ?> <?php echo $data['tahun_dibayar']; ?></td>
                            <td><?php echo $data['id_spp']; ?></td>
                            <td><?php echo $data['jumlah_bayar']; ?></td>
                            <td><?php echo $data['id_petugas']; ?></td>
                            <td>
                                <a href="Views/View_put_pembayaran.php?id_pembayaran=<?php echo $Get['id_pembayaran'] ?>">Ubah</a> |
                                <a href="Config/Routes_pembayaran2.php?function=delete_pembayaran&id_pembayaran=<?php echo $Get['id_pembayaran'] ?>" onclick="return confirm('Apakah anda mau menghapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php 
                        }
                }
            }
            ?>
        </table>
        <br>