<?php
class database{
    var $host = "localhost";
    var $uname = "root";
    var $pass = "";
    var $db = "mahasiswa";
    var $con;

    function __construct(){
        $this->con=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        mysqli_select_db($this->con, $this->db);
    }

    function tampil_data(){
        $data = mysqli_query($this->con,"select * from nabila_mhs");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    
    function input($program_pendidikan,$nama_lengkap,$email){
        mysqli_query($this->con,"insert into nabila_mhs values('', '$program_pendidikan','$nama_lengkap','$email')");
    }
    function hapus($id){
        mysqli_query($this->con,"delete from nabila_mhs where id='$id'");
    }
    function edit($id){
        $data = mysqli_query($this->con,"select * from nabila_mhs where id='$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id,$program_pendidikan,$nama_lengkap,$email){
        mysqli_query($this->con,"update nabila_mhs set program_pendidikan='$program_pendidikan',
        nama_lengkap='$nama_lengkap',email='$email' where id='$id'");
    }
}
?>