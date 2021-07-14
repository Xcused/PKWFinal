<?php
// koneksi database
include './config.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$No_KTP = $_POST['No_KTP'];
$No_Telfon = $_POST['No_Telfon'];
$Tahun_Masuk = $_POST['Tahun_Masuk'];
$Masa_Kerja = date("Y")-$Tahun_Masuk;

// update data ke database
mysqli_query($koneksi, "update karyawan set nama='$nama', No_KTP='$No_KTP', No_Telfon='$No_Telfon',
 Tahun_Masuk='$Tahun_Masuk', Masa_Kerja='$Masa_Kerja' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:index.php");
