<?php
if($_POST){
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama)){
        echo "<script>alert('nama tidak boleh kosong');location.href='login.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='login.php';</script>";

    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='login.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama, username, password) value ('".$nama."','".$username."','".$password."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan akun');location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan akun');location.href='login.php';</script>";
        }
    }
}
?>