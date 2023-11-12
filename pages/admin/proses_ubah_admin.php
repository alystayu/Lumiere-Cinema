<?php
if($_POST){
    $id_admin=$_POST['id_admin'];
    $nama=$_POST['nama'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($nama)){
        echo "<script>alert('nama admin tidak boleh kosong');location.href='ubah_admin.php';</script>";
    } elseif(empty($username)){
        echo "<script>alert('username admin tidak boleh kosong');location.href='ubah_admin.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update admin set nama='".$nama."', username='".$username."', where id_admin = '".$id_admin."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update admin');location.href='admin.php';</script>";
            } else {
                echo "<script>alert('Gagal update admin');location.href='ubah_admin.php?id_admin=".$id_admin."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update admin set nama='".$nama."', username='".$username."', password='".md5($password)."', id_admin='".$id_admin."' where id_admin = '".$id_admin."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update admin');location.href='admin.php';</script>";
            } else {
                echo "<script>alert('Gagal update admin');location.href='ubah_admin.php?id_admin=".$id_admin."';</script>";
            }
        }
        
    } 
}
?>