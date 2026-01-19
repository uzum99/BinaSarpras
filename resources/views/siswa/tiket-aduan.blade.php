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
            <a href="{{ route('tiket-aduan') }}" class="btn btn-primary">Aduan Suara</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Gambar Halaman Cek Tiket Aduan -->
  <img src="assets/hero-1.png" class="img-fluid mx-auto d-block" alt="Gambar Tiket Aduan" style="max-width: 500px;">
                                                                                                                                                                     

  <!-- Main -->
  <main class="container">
    <section id="">

    </section>

  </main>
  <!-- Footer -->
  <footer class="py-3 my-4">
    <p class="text-center text-body-secondary">© 2026 LAB RPL, SMK Muh 3 Tegaldlimo</p>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>