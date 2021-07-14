<?php
    include './config.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $No_KTP = $_POST['No_KTP'];
    $No_Telfon = $_POST['No_Telfon'];
    $Tahun_Masuk = $_POST['Tahun_Masuk'];
    $Masa_Kerja = date("Y")-$Tahun_Masuk;


    mysqli_query($koneksi, "insert into karyawan (nama,No_KTP,No_Telfon,Tahun_Masuk,Masa_Kerja,id)
    values('$nama','$No_KTP','$No_Telfon','$Tahun_Masuk','$Masa_Kerja' ,'')");
    header("location:./index.php");
  
?>