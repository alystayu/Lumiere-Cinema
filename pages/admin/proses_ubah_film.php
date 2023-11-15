<?php
if($_POST){
    $id_film=$_POST['id_film'];
    $judul=$_POST['judul'];
    $deskripsi=$_POST['deskripsi'];
    $genre=$_POST['genre'];
    $durasi=$_POST['durasi'];
    $tahun_rilis=$_POST['tahun_rilis'];
    $sutradara=$_POST['sutradara'];
    $harga=$_POST['harga'];
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