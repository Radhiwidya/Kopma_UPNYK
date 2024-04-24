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
  <link rel="stylesheet" href="../../Style/prfl.css">
  <link rel="icon" href="../../Image/Icon.png">
  <title>Pengawas | KOPMA UPNVY</title>
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
                  <li><a class="dropdown-item" href="../Keuangan/Profil.php">Profil</a></li>
                  <li><a class="dropdown-item" href="../Keuangan/Simpanan.php">Simpanan</a></li>
                  <li><a class="dropdown-item" href="../Keuangan/Laporan.php">Laporan Keuangan</a></li>
                  <li><a class="dropdown-item" href="../Keuangan/Sosialisasi-SHU.php">Sosialisasi SHU & Simpanan</a></li>
                  <li><a class="dropdown-item" href="../Keuangan/Grafik-Investasi.php">Grafik Investasi & Laba Rugi</a></li>
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
  <div class="content">
    <h3 id="judul">Laporan Triwulan</h3>
    <br>
    <p>Ini konten laporan! <br>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere saepe iste pariatur reiciendis id, quia, dolorem inventore eveniet, porro odio sapiente. Delectus voluptate quod perferendis modi eum, quia reprehenderit maxime, debitis, suscipit aliquam in neque quisquam officiis alias deleniti animi quidem inventore obcaecati! Eum nulla totam dolorum quibusdam aspernatur eos, facere eligendi earum vitae necessitatibus a hic est inventore, repellendus quis laboriosam itaque esse non autem nostrum fugit quam laborum, praesentium reiciendis? Mollitia modi non quibusdam vitae? Sint a amet et quo minima unde non debitis incidunt inventore! Explicabo iure ab, sunt earum ullam veniam consequatur! Officiis architecto magnam accusantium dignissimos voluptatum pariatur earum, voluptatibus ipsa, saepe debitis iste vero blanditiis quis distinctio perferendis assumenda, omnis consequuntur? Excepturi et deleniti aliquam! Officia possimus, nobis laboriosam corrupti odio necessitatibus accusantium voluptates saepe, a natus suscipit eligendi consequuntur sit repellat placeat porro. Nam corporis dolorem accusamus, doloremque vero enim, voluptatum officia rerum animi harum dolore vitae doloribus culpa accusantium, cumque molestiae voluptatibus! Dolores deserunt culpa quae, nobis magni optio? Quae dicta illo dolorem tempora maxime adipisci sequi eligendi itaque ut nisi, asperiores cupiditate cum possimus saepe reprehenderit nihil. Nobis, possimus. Ut repellendus quae numquam ducimus voluptatibus deleniti voluptate fugiat voluptates! Repellat, eius!
    </p>
  </div>
  <div class="clear"></div>
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