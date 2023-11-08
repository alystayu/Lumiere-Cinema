<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="assets/img/movie.png" rel="icon">
    <link href="assets/img/movie.png" rel="apple-touch-icon">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <?php
    include("../../components/navbar.php")
   ?>

    <div class="row">
        <!-- Gallery item -->
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="bg-white rounded shadow-sm"><img src="../assets/img/Kukira Kau Rumah.jpeg" alt="" width="290"
                    height="426" class="img-fluid card-img-top">
                <div class="p-4">
                    <h5> <a href="detail_film.php" class="text-dark">Kukira Kau Rumah</a></h5>
                    <p class="small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit
                    </p>
                </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="button" class="btn btn-warning">Buy Ticket</button>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
</body>

</html>