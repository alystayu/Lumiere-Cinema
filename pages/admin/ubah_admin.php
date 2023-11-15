<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Update Admin</title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_admin=mysqli_query($conn,"select * from admin where id_admin = '".$_GET['id_admin']."'");
    $dt_admin=mysqli_fetch_array($qry_get_admin);
    ?>
    <h3>Tambah Admin</h3>
    <form action="proses_ubah_admin.php" method="post">
        <input type="hidden" name="id_admin" value= "<?=$dt_admin['id_admin']?>">
        Nama Admin :
        <input type="text" name="nama" value= "<?=$dt_admin['nama']?>" class="form-control">
        Username : 
        <input type="text" name="username" value="<?=$dt_admin['username']?>" class="form-control">
        Password : 
        <input type="password" name="password" value="" class="form-control">
        <input type="submit" name="simpan" value="Ubah Admin" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>