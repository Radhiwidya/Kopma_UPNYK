<?php
session_start();
if (empty($_SESSION['username'])) {
  ?>
  <script type="text/javascript">
    alert("Harap Login Terlebih Dahulu !");
    window.location.href = '../../Index.php?pesan=belum_login';
  </script>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../../Style/keuangan.css">
    <link rel="icon" href="../../Image/Icon.png">
    <title>Grafik-Investasi | KOPMA UPNVY</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-success w-100 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="../Dashboard.php">
                <img src="../../Image/Logo.png" alt="Kopma UPNVY" width="200px">
            </a>
            <nav class="navbar navbar-expand-lg bg-success">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <!--  Dropdown Menu-->
                            <li class="nav-item dropdown">
                                <a id="list" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                    Pengawas
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../Pengawas/Profil.php">Profil</a></li>
                                    <li><a class="dropdown-item" href="../Pengawas/Transparansi.php">Transparansi Kinerja Pengurus</a></li>
                                    <li><a class="dropdown-item" href="../Pengawas/Laporan.php">Laporan Triwulan</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="list" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                    Usaha
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../Usaha/Profil.php">Profil</a></li>
                                    <li><a class="dropdown-item" href="../Usaha/Persediaan.php">Persediaan</a></li>
                                    <li><a class="dropdown-item" href="../Usaha/Administrasi.php">Administrasi</a></li>
                                    <li><a class="dropdown-item" href="../Usaha/Partner-Usaha.php">Partner Bisnis</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="list" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                    Personalia
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../Personalia/Profil.php">Profil</a></li>
                                    <li><a class="dropdown-item" href="../Personalia/Upskilling.php">Upskilling</a></li>
                                    <li><a class="dropdown-item" href="../Personalia/Recruitmen.php">Recruitment</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="list" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                    Keuangan
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="Profil.php">Profil</a></li>
                                    <li><a class="dropdown-item" href="Simpanan.php">Simpanan</a></li>
                                    <li><a class="dropdown-item" href="Laporan.php">Laporan Keuangan</a></li>
                                    <li><a class="dropdown-item" href="Sosialisasi-SHU.php">Sosialisasi SHU & Simpanan</a></li>
                                    <li><a class="dropdown-item" href="Grafik-Investasi.php">Grafik Investasi & Laba Rugi</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="list" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                    Riset
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../Riset/Profil.php">Profil</a></li>
                                    <li><a class="dropdown-item" href="../Riset/Analisis.php">Analisis</a></li>
                                    <li><a class="dropdown-item" href="../Riset/Planning.php">Planning</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="list" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                    Adminhum
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../Adminhum/Profil.php">Profil</a></li>
                                    <li><a class="dropdown-item" href="../Adminhum/Arsip-Data.php">Arsip Data</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="list" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                    PSDA
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../PSDA/Profil.php">Profil</a></li>
                                    <li><a class="dropdown-item" href="../PSDA/Administrasi.php">Administrasi</a></li>
                                    <li><a class="dropdown-item" href="../PSDA/Kegiatan.php">Kegiatan Anggota</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="list" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                    Lainya
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="../Lainnya/Visi-misi.php">Visi Misi</a></li>
                                    <li><a class="dropdown-item" href="../Lainnya/Rencana.php">Rencana Strategis</a></li>
                                    <li><a class="dropdown-item" href="../../PHP/Logout.php">Keluar</a></li>
                                </ul>
                            </li>
                            <!-- Batas Dropdown Menu -->
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </nav>
    <!--Batas Navbar-->
    <!-- Konten -->
    <div class="content" class="uk-position-center">
        <center>
            <canvas id="myChart"></canvas>
        </center>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desemnber'],
                datasets: [{
                    label: 'Penghasilan',
                    data: [1000, 3000, 2000, -1000, 1000, 1500, 500, 1000, 2000, -500, 3000, 1000],
                    borderWidth: 2,
                    borderColor: '#7a680045',
                    backgroundColor: '#7a6800', 
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    <!-- Batas Konten -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
<footer>
    <div class="fixed-bottom bg-success h-5">
        <p>Hak Cipta &copy; 2024 Kopma UPNVY</p>
    </div>
</footer>

</html>