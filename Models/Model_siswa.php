<?php

// Class pegawai (CRUD siswa)
class Model_siswa{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $nisn; 
     var $nis;
     var $nama;
     var $id_kelas;
     var $alamat;
     var $no_telp;
     var $id_spp;



     // Method main variabel
        function __construct()
        {
        // Membuat Object dari Class database
        include '../Config/Database.php';
        $this->db = new Database();
        $this->con=$this->db->Connect();
        }




    // Method untuk memasukan data ke dalam table
    function POST ($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp){

        mysqli_query($this->con,"insert into siswa values(
           '".$nisn."',
            '".$nis."',
            '".$nama."',
            '".$id_kelas."',
            '".$alamat."',
            '".$no_telp."',
            '".$id_spp."'
            )");

    }



    
    // Method untuk mengambil semua data dari table siswa
    function GET(){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from siswa");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk mengambil data seleksi dari table
    function GET_Where ($nisn){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from siswa where nisn='$nisn'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }




    // Method untuk memasukan data ke dalam table
    function PUT ($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp){

        // perintah PUT data
        mysqli_query($this->con,"update siswa set
            nisn='".$nisn."',
            nis='".$nis."',
            nama='".$nama."',
            id_kelas='".$id_kelas."',
            alamat='".$alamat."',
            no_telp='".$no_telp."',
            id_spp='".$id_spp."'
            where nisn='".$nisn."'
            ");

    }




    // Method untuk menghapus data dari table
    function DELETE ($nisn){

        // perintah DELETE data
        mysqli_query($this->con,"delete from siswa where nisn='$nisn'");

    }


 


}


?>