<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">BinaSarana</a>
      <img src="{{ asset('img/logo_icon.png') }}" alt="Logo Icon" class="logo-icon" />

      <!-- Tambahkan kelas d-flex justify-content-center dan sesuaikan lebar container -->
      <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('about') }}">About Us</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('tiket-aduan') }}" class="btn btn-primary">Aduan Suara</a>
          </li>
        </ul>
      </div>
      <a href="{{ route('login') }}" class="btn btn-light">Sign-in Admin</a>
    </div>
  </nav>