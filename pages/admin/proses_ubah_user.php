<?php
if($_POST){
    $id_pengguna=$_POST['id_pengguna'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='ubah_user.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username user tidak boleh kosong');location.href='ubah_user.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update user set nama='".$nama."', username='".$username."', where id_pengguna = '".$id_pengguna."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='customer.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_pengguna=".$id_pengguna."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update user set nama='".$nama."', username='".$username."', password='".md5($password)."', id_pengguna='".$id_user."' where id_pengguna = '".$id_pengguna."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='customer.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_pengguna=".$id_pengguna."';</script>";
            }
        }
        
    } 
}
?>