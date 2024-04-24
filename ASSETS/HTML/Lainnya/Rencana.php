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
  <link rel="stylesheet" href="../../Style/lainnya.css">
  <link rel="icon" href="../../Image/Icon.png">
  <title>Visi Misi | KOPMA UPNVY</title>
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
  <h4 id="judul">Rencana Strategis</h4>
      <br>
  <p>Ini rencana kedepannya! <br>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum saepe mollitia molestias nesciunt excepturi aperiam iste nemo, eligendi perferendis debitis, explicabo officiis sequi amet sint totam eaque pariatur similique? Architecto pariatur possimus nemo saepe cum, ab fugit officiis cupiditate, molestias laborum, vel unde eum in eos! Ipsum obcaecati officiis sapiente numquam corrupti nihil ut porro atque excepturi illo quia mollitia laudantium dolore odit eveniet et repellat, doloremque quaerat cumque, autem esse assumenda debitis? Doloribus ullam numquam illo, ratione, iste soluta laudantium tempora impedit rerum placeat at assumenda commodi! Consectetur, repellat veniam quis, rem a, deserunt totam culpa quod error quo magnam fugit. Maiores natus dicta temporibus sed quod minima ipsum atque distinctio, itaque voluptatibus beatae quam praesentium placeat suscipit repellendus eligendi commodi doloremque inventore quia earum unde voluptate ad hic dolor. Necessitatibus in, quis nulla nemo nobis tempore, quibusdam cumque adipisci amet iste cum placeat ad natus facilis vel fugiat quam earum! Quaerat nihil distinctio incidunt doloribus impedit voluptas consectetur necessitatibus corrupti ad fuga nam nemo qui aperiam esse, mollitia reiciendis dolorem. Corporis rem iusto ex repudiandae eum sequi dolorem. At adipisci earum porro necessitatibus aperiam accusamus distinctio modi natus voluptates unde, amet repudiandae, ipsam iste numquam excepturi ullam omnis.
  </p>  
  </div>
  <div class="clear"></div>
  <!-- Batas Konten -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
<footer>
  <div class="fixed-bottom bg-success h-5">
    <p><b>Hak Cipta &copy; 2024 Kopma UPNVY</b></p>
  </div>
</footer>

</html>