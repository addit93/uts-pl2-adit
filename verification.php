<?php 
 session_start();
 include 'Config/Database.php';
 $db = new Database();
 $con= $db->Connect();
 
 $username = $_POST['username'];
 $password = md5($_POST['password']);
 // $password = md5($_POST['password']);
 
 //cek data
 $sql = "SELECT * FROM petugas WHERE username='$username'";
 $qry = mysqli_query($con,$sql);
 $usr = mysqli_fetch_array( $qry);

 if( 
  $username == $usr['username']
  AND
  $password == $usr['password']
   )
 {
  $_SESSION['id_petugas'] = $usr['id_petugas'];
  $_SESSION['username'] = $usr['username'];
  $_SESSION['nama_petugas'] = $usr['nama_petugas'];
  $_SESSION['level'] = $usr['level'];
  $_SESSION['login']    = 1;
  $pesan = "Login berhasil, selamat datang $username";
 } else {
  $pesan = "Login gagal, username atau password anda salah! ";
 }
 
 ?>
 <script>
  alert('<?php echo  $pesan;?>');

  location='index.php';
 </script>