<?php

include "../../koneksi.php";

 $nama_buah = $_POST['nama_buah'];
 $nama_file = $_FILES['gambar']['name'] ;
 $ukuran_file = $_FILES['gambar']['size'] ;
 $file_tmp = $_FILES['gambar']['tmp_name'] ;
 $kode_warna = $_POST['kode_warna'];
 $warna_monokromatik = $_POST['warna_monokromatik'];

 $ekstensi_diperbolehkan = array('png','jpg','jpeg');
 $x = explode('.',$nama_file);
 $ekstensi = strtolower(end($x));
 if(in_array($ekstensi, $ekstensi_diperbolehkan)===TRUE){
     if($ukuran_file < 10440700){
         move_uploaded_file($file_tmp, '../../gambar/'.$nama_file);
         $insert_data = $koneksi->query("INSERT INTO tab_buah SET nama_buah = '$nama_buah', gambar = '$nama_file', kode_warna = '$kode_warna', warna_monokromatik = '$warna_monokromatik'");
         if($insert_data===true){
            echo "<script>alert('Data buah berhasi di tambah');
            window.location.href='../halaman/data_buah/data_buah.php' </script>";
         }else{
            echo "<script> alert('Data buah gagal di tambah !!!') </script>;
            window.location.href='../halaman/data_bauh/tambah_data_buah.php' </script>";
         }
     }
 }

?>