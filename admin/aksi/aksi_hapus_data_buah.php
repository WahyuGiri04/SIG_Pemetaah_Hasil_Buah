<?php

include "../../koneksi.php";

$id_buah = $_GET['id_buah'];

$hapus_data_buah = $koneksi->query("DELETE FROM tab_buah WHERE id_buah = '$id_buah'");
if($hapus_data_buah===true){
    echo "<script>alert('Data buah berhasi di hapus');
    window.location.href='../halaman/data_buah/data_buah.php' </script>";
 }else{
    echo "<script> alert('Data buah gagal di hapus !!!') ;
    window.location.href='../halaman/data_buah/data_buah.php' </script>";
 }

?>