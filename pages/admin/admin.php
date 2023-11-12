<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <!-- font awesome icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <?php
        include("../../components/navbar_admin.php")
        ?>

        <h3>Data Admin</h3>
        <table class="table table hover table-striped">
            <thead>
                <tr>
                <th>NO</th><th>NAMA ADMIN</th>
                <th>USERNAME</th><th>PASSWORD</th><th>OPTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "koneksi.php";
                $qry_admin=mysqli_query($conn,"select * from admin");
                $no=0;
                while($data_admin=mysqli_fetch_array($qry_admin)) {
                    $no++;?>
                    <tr>
                        <td><?=$no?></td><td><?=$data_admin['nama']?></td>
                        <td><?=$data_admin['username']?></td>
                        <td><?=$data_admin['password']?></td>
                        <td><a href="ubah_admin.php?id_admin=<?=$data_admin['id_admin']?>" class="btn btn-success">Ubah</a>
                            <a href="hapus.php?id_admin=<?=$data_admin['id_admin']?>"
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