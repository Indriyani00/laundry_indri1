<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>

    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand">Navbar</a>
            <form class="d-flex input-group w-auto">
                <input type="search" class="form-control rounded" placeholder="Search" aria-describedby="search-addon">
                <button class="btn btn-outline-light mx-3" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 my-5 ms-5 ps-5">
                    <img src="cute.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-md-8 my-5 ms-4">
                    <h1>PENGELOLAAN LAUNDRY</h1>
                    <p class="fw-senibold">Catatan Perjalanan Laundry</p>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="isi_data_perjalanan.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="isi_data_perjalanan.php">Registrasi Pelanggan</a></li>
                        <li class="breadcrumb-item"><a href="isi_data_perjalanan.php">CRUD Pengguna</a></li>
                        <li class="breadcrumb-item"><a href="isi_data_perjalanan.php">Entri Transaksi</a></li>
                        <li class="breadcrumb-item"><a href="isi_data_perjalanan.php">Generate Laporan</a></li>
                        <li class="breadcrumb-item"><a href="isi_data_perjalanan.php">Logout</a></li>
                        <li class="breadcrumb-item active"><a href="#">Isi Data</a></li>
                    </ol>
                    <div class="mb-3">
                        <textarea class="form-control" rows="8"></textarea>
                        <button type="button" class="btn btn-primary mt-5">Isi Catatan Perjalanan</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>