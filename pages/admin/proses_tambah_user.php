<?php
if($_POST){
    $nama=$_POST['nama'];
    $password= $_POST['password'];
    $id_pengguna=$_POST['id_pengguna'];
    if(empty($nama)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='tambah_user.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama, username, password, id_pengguna) value ('".$nama."','".$username."','".md5($password)."','".$id_pengguna."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan user');location.href='tambah_user.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan user');location.href='tambah_user.php';</script>";
        }
    }
}
?>