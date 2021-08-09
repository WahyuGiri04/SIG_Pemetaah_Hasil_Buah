<?php 

include "../../koneksi.php";


$id_pengguna = $_POST['id_pengguna'];
$pass_baru = $_POST['pass_baru'];
$pass_baru_ulang = $_POST['pass_baru_ulang'];
$pass_lama = $_POST['pass_lama'];
$password = sha1($pass_lama);
$password_baru = sha1($pass_baru);


$sql_select = $koneksi->query("SELECT * FROM tab_user WHERE id_pengguna = '$id_pengguna'");
$data_select = $sql_select->fetch_assoc();
$cek_password = $data_select['password'];

if($password == $cek_password){
    if($pass_baru==$pass_baru_ulang){
        $sql_update = $koneksi->query("UPDATE tab_user SET password='$password_baru' WHERE id_pengguna = '$id_pengguna'");
        if($sql_update===true){
            echo "<script> alert('Password Berhasil di ubah Silahkan login Kembali !!!');
            window.location.href='../logout.php' </script>";
        }else{
            echo "<script> alert('Password gagal di ubah !!!');
            window.location.href='../halaman/akun/ubah_password.php' </script>";
        }
    }else{
        echo "<script> alert('Password baru tidak sama dengan pasword konfirmasi !!!');
        window.location.href='../halaman/akun/ubah_password.php' </script>";
    }
}else{
    echo "<script> alert('Password Salah !!!');
    window.location.href='../halaman/akun/ubah_password.php' </script>";
}

?>