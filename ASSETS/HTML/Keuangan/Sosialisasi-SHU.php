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
  <title>Keuangan | KOPMA UPNVY</title>
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
  <div class="content">
    <h3 id="judul">Sosialisasi SHU</h3>
    <br>
    <p>Ini adalah konten Sosialisasi SHU! <br> 
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum atque quasi nihil eveniet omnis, dolores fugit, itaque cum alias harum odit corporis placeat aspernatur quaerat est, sit repellat unde quisquam. Dolore quisquam sed labore exercitationem dolorum, iusto iure culpa inventore corrupti a nobis molestiae vitae dignissimos nam velit nostrum saepe excepturi similique. Repellendus possimus, voluptates porro maiores aliquam quibusdam rem repudiandae consequatur minus? Similique fuga obcaecati quo, saepe fugit vero voluptatem nostrum necessitatibus labore aspernatur dolor voluptate possimus hic! Similique tenetur quasi blanditiis voluptatum commodi corporis debitis. Possimus itaque provident suscipit tenetur non ipsa optio veritatis iusto hic cumque omnis illum repellendus fugit maiores tempore ullam, magnam voluptatibus, perferendis, id autem totam consequatur earum. Veniam sint magni omnis facilis nostrum et nulla qui nobis accusamus, delectus autem consectetur, blanditiis eaque ducimus nisi labore unde, enim officiis mollitia. Perspiciatis autem, ut odio fugiat iusto saepe cum commodi quisquam similique fugit necessitatibus animi placeat illum explicabo et porro delectus harum, reiciendis aliquid? Beatae accusantium architecto quam odio eligendi ab perspiciatis esse iure molestias officia, numquam placeat aliquam? Earum reprehenderit aliquam soluta fugiat rem? Facilis ab non suscipit iste in. Debitis nisi dignissimos quidem hic. Quos molestias, iste quia incidunt quibusdam nostrum ipsam?
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