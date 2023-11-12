<?php
if($_POST){
    $nama=$_POST['nama'];
    $password= $_POST['password'];
    $id_admin=$_POST['id_admin'];
    if(empty($nama)){
        echo "<script>alert('nama admin tidak boleh kosong');location.href='tambah_admin.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_admin.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_admin.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into admin (nama, username, password, id_admin) value ('".$nama."','".$username."','".md5($password)."','".$id_admin."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan admin');location.href='tambah_admin.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan admin');location.href='tambah_admin.php';</script>";
        }
    }
}
?>