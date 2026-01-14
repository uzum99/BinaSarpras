<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bina Sarpras</title>
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
 
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">BinaSarpras</a>
      <img src="assets/logo_icon.png" alt="Logo Icon" class="logo-icon" />

      <!-- Tambahkan kelas d-flex justify-content-center dan sesuaikan lebar container -->
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#layanan">Layanan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tentangkami">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <button class="btn btn-primary d-inline-flex align-items-center" type="button">
              <i class="fa-solid fa-comment-dots"></i>
              Aduan Sarpras
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Gambar Halaman Cek Tiket Aduan -->
  <img src="assets/hero-1.png" class="img-fluid" alt="Gambar Tiket Aduan" >

  <!-- Main -->
  <main class="container">
    <section id="layanan">
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3">
            <svg class="bi" width="1em" height="1em" aria-hidden="true">
              <use xlink:href="#collection"></use>
            </svg>
          </div>
          <h6 class="fs-2 text-body-emphasis">Layanan Pengaduan Sarana dan Prasarana</h6>
          <p>Menyediakan fasilitas bagi siswa untuk melaporkan kerusakan atau permasalahan sarana dan prasarana sekolah secara digital, disertai deskripsi dan dokumentasi pendukung. Setiap aduan tercatat dan dapat dipantau status tindak lanjutnya secara transparan.</p>
        </div>
        <div class="feature col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"> <svg class="bi" width="1em" height="1em" aria-hidden="true">
              <use xlink:href="#people-circle"></use>
            </svg> </div>
          <h6 class="fs-2 text-body-emphasis">Layanan Aspirasi dan Usulan Pengembangan</h6>
          <p>Menjadi wadah bagi siswa untuk menyampaikan aspirasi, saran, atau usulan pengembangan sarana dan prasarana sekolah guna mendukung kenyamanan dan kualitas proses pembelajaran.</p>
        </div>
        <div class="feature col">
          <div class="feature-icon d-inline-flex align-items-center justify-content-center text-bg-primary bg-gradient fs-2 mb-3"> <svg class="bi" width="1em" height="1em" aria-hidden="true">
              <use xlink:href="#toggles2"></use>
            </svg> </div>
          <h6 class="fs-2 text-body-emphasis">Layanan Monitoring dan Tindak Lanjut</h6>
          <p>Memfasilitasi pihak sekolah (admin) dalam mengelola aduan dan aspirasi, memberikan umpan balik, serta memperbarui status penanganan sehingga siswa dapat mengetahui progres penyelesaian secara akuntabel.</p>
        </div>
      </div>
    </section>

    <section id="tentangkami">
      <h2>BinaSarpras</h2>
      <p>Bina Sarpras adalah platform digital yang dirancang untuk mendukung pengelolaan serta pengembangan sarana dan prasarana sekolah secara partisipatif dan transparan. Aplikasi ini menjadi wadah bagi siswa untuk menyampaikan aduan maupun aspirasi terkait kondisi sarana dan prasarana sekolah secara mudah dan terstruktur.</p>
      <p>Melalui Bina Sarpras, setiap aduan dan aspirasi yang disampaikan dapat dipantau status tindak lanjutnya secara real time. Pihak sekolah sebagai admin dapat mengelola laporan, memberikan umpan balik, serta melakukan monitoring penanganan sarana dan prasarana secara sistematis.</p>
      <p>Dengan adanya Bina Sarpras, diharapkan tercipta lingkungan sekolah yang lebih nyaman, aman, dan mendukung proses pembelajaran, sekaligus menumbuhkan budaya peduli, tanggung jawab, dan komunikasi yang positif antara siswa dan pihak sekolah.</p>
    </section>

  </main>
  <!-- Footer -->
  <footer class="py-3 my-4">
    <p class="text-center text-body-secondary">© 2026 LAB RPL, SMK Muh 3 Tegaldlimo</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>