<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Ekstrakurikuler PMR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body class="container">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-danger">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Palang Merah Remaja</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Profil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Visi Misi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sejarah</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Galeri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Prestasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Struktur Organisasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Logout-></a>
                        </li>
                    </ul>
                </div>
                </ul>
            </div>
            </div>
        </nav>
    </header>
    <main>
        <?php
        $katakunci = ($_GET['katakunci'])?$_GET['katakunci']:"";
        ?>
        <h1>Profil</h1>
        <p>
            <a href="#.php">
                <input type="button" class="btn btn-primary" value="Buat Halaman Baru"/>
            </a>
        </p>
        <form class="row g-3" method="get">
            <div class="col-auto">
                <input type="text" class="form-control" placeholder="Masukkan Kata Kunci" name="katakunci" value="<?php echo $katakunci?>"/>
            </div>
            <div class="col-auto">
                <input type="submit" name="cari" value="Cari Tulisan" class="btn btn-secondary"/>
            </div>
        </form>
    </main>
    <footer class="bg-light">
        <div class="text-center p-3" style="background:#1212121">
        Copyright &copy; Kelompok 3 XI RPL 2024
        </div>
    </footer>
</body>

</html>