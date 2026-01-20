@extends('layouts.master')

@section('content')

<!-- Gambar Halaman Cek Tiket Aduan -->
<img src="assets/hero-1.png" class="img-fluid mx-auto d-block" alt="Gambar Tiket Aduan" style="max-width: 500px;">

<h1>Lacak Tiket Aduan</h1>
<p class="tiket">Silahkan masukkan nomer tiket anda untuk melihat proses tiket aduan.</p>



<!-- Main -->
<main class="container">
  <div id="cek-tiket">
    <form action="#" class="banner_search_form" method="post">
      <div class="input-group input-group-lg w-50 mx-auto">
      <input class="form-control form-control-lg w-50 mx-auto" type="text" placeholder="Tiket Aduan" aria-label=".form-control-lg example">
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
    
  </div>

</main>

@endsection