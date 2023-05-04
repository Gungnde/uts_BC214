<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$semester = $_POST['semester'];
$jumlah_yang_harus_dibayar = $_POST['jumlah_yang_harus_dibayar'];
$no_hp = $_POST['nohp'];
$email = $_POST['email'];

include "koneksi.php";

$qry = "INSERT INTO keuangan VALUES (
    '$nim', '$nama', '$jurusan', '$semester', '$jumlah_yang_harus_dibayar', '$no_hp', '$email'
)";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil disimpan'); 
    window.location = 'formulir2.php';</script>";
}else{
    echo "<script>alert('Data gagal disimpan');</script>";
}
