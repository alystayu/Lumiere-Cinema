<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Update Film</title>
</head>
<body>
    <?php 
    include "koneksi.php";
    $qry_get_film=mysqli_query($conn,"select * from film where id_film = '".$_GET['id_film']."'");
    $dt_film=mysqli_fetch_array($qry_get_film);
    ?>
    <h3>Tambah Film</h3>
    <form action="proses_ubah_film.php" method="post">
        <input type="hidden" name="id_film" value= "<?=$dt_film['id_film']?>">
        Judul Film :
        <input type="text" name="judul" value= "<?=$dt_film['judul']?>" class="form-control">
        Deskripsi : 
        <input type="text" name="deskripsi" value="<?=$dt_film['deskripsi']?>" class="form-control">
        Genre : 
        <input type="text" name="genre" value="<?=$dt_film['genre']?>" class="form-control">
        Durasi :
        <input type="text" name="durasi" value= "<?=$dt_film['durasi']?>" class="form-control">
        Tahun Rilis : 
        <input type="text" name="tahun_rilis" value="<?=$dt_film['tahun_rilis']?>" class="form-control">
        Sutradara : 
        <input type="text" name="sutradara" value="<?=$dt_film['sutradara']?>" class="form-control">
        Poster : 
        <!-- <input type="text" name="tahun_rilis" value="<?=$dt_film['tahun_rilis']?>" class="form-control"> -->
        <input type="file" name="image" id="image" class="form-control">
        Harga : 
        <input type="text" name="harga" value="<?=$dt_film['harga']?>" class="form-control">
        <input type="submit" name="simpan" value="Ubah Film" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>