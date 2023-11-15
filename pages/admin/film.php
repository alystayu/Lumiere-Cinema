<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Film</title>
        <!-- font awesome icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <?php
        include("../../components/navbar_admin.php")
        ?>

<h3>Data Film</h3>
        <table class="table table hover table-striped">
            <thead>
                <tr>
                <th>NO</th><th>JUDUL FILM</th>
                <th>DESKRIPSI</th><th>GENRE</th><th>DURASI</th><th>TAHUN RILIS</th>
                <th>SUTRADARA</th><th>POSTER</th><th>HARGA</th><th>OPTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry_film=mysqli_query($conn,"select * from film");
                $no=0;
                while($data_film=mysqli_fetch_array($qry_film)) {
                    $no++;?>
                    <tr>
                        <td><?=$no?></td><td><?=$data_film['judul']?></td>
                        <td><?=$data_film['deskripsi']?></td>
                        <td><?=$data_film['genre']?></td>
                        <td><?=$data_film['durasi']?></td>
                        <td><?=$data_film['tahun_rilis']?></td>
                        <td><?=$data_film['sutradara']?></td>
                        <td><img src="../assets/img/<?=$dt_film['poster']?>" alt="" width="290" height="426"
                            class="img-fluid card-img-top"></td>
                        <td><?=$data_film['harga']?></td>
                        <td><a href="ubah_film.php?id_film=<?=$data_film['id_film']?>" class="btn btn-success">Ubah</a>
                            <a href="hapus.php?id_film=<?=$data_film['id_film']?>"
                            onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>

</html>