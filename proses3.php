<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$nama_event = $_POST['nama_event'];
$tanggal_event = $_POST['tanggal_event'];
$no_hp = $_POST['nohp'];
$email = $_POST['email'];

include "koneksi.php";

$qry = "INSERT INTO pendaftaran_event VALUES (
    '$nim', '$nama', '$jurusan', '$nama_event', '$tanggal_event', '$no_hp', '$email'
)";

$exec = mysqli_query($con, $qry) or die(mysqli_error($con));

if($exec){
    echo "<script>alert('Data berhasil disimpan'); 
    window.location = 'formulir3.php';</script>";
}else{
    echo "<script>alert('Data gagal disimpan');</script>";
}
