<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>SELAMAT DATANG</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                Data Karyawan
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Navbar -->
    <?php
    // Memanggil file config.php
    include 'config.php';
    // Menangkap id yang dikirim melalui button edit di index.php
    $id = $_GET['id'];
    // Melakukan query untuk mendapatkan data mahasiswa berdasarkan $id
    $karyawan = mysqli_query($koneksi, "select * from karyawan where id='$id'");
    while ($data = mysqli_fetch_assoc($karyawan)) {
    ?>
        <div class="container mt-5">
            <p><a href="index.php">Home</a> / Detail Karyawan / <?php echo $data['nama'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Profil Karyawan</p>
                </div>
                <div class="card-body fw-bold">
                    <p>Nama : <?php echo $data['nama'] ?></p>
                    <p>No_KTP : <?php echo $data['No_KTP'] ?></p>
                    <p>No_Telfon : <?php echo $data['No_Telfon'] ?></p>
                    <p>Tahun_Masuk : <?php echo $data['Tahun_Masuk'] ?></p>
                    <p>Masa_Kerja : <?php echo $data['Masa_Kerja'] ?></p>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>

</html>