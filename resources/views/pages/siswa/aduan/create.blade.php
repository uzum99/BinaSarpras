@extends('layouts.main')

@section('content')

<div class="container">
  <div class="card w-50 mx-auto">
    <div class="card-body">
      <h4 class="card-title">Kirim Aduan Suara</h4>

      <form action="{{ route('aduan.store') }}" method="post">

        <div class="mb-3">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama">
          <div id="namaHelp" class="form-text">Isikan nama lengkap sesuai identitas siswa.</div>
        </div>

        <div class="mb-3">
          <label for="kelas" class="form-label">Kelas</label>
          <input type="text" class="form-control" id="kelas">
          <div id="kelas" class="form-text">Isikan kelas yang sesuai.</div>
        </div>

        <div class="mb-3">
          <label for="nis" class="form-label">NIS</label>
          <input type="text" class="form-control" id="nis">
          <div id="nis" class="form-text">Isikan nama lengkap sesuai Nomer Induk Siswa.</div>
        </div>
        
        <div class="mb-3">
          <label for="kategori" class="form-label">Kategori</label>
          <select class="form-select" aria-label="Default select example">
            <option value="1">Laporan Insiden</option>
            <option value="2">Manajemen Sekolah</option>
          </select>
          <div id="kategori" class="form-text">Pilih tipe aduan.</div>
        </div>

        <div class="mb-3">
          <label for="Pesan" class="form-label">Pesan</label>
          <textarea type="text" class="form-control" id="Pesan"></textarea>
          <div id="Pesan" class="form-text">Deskripsikan aduan secara ringkas dan jelas.</div>
        </div>

        <div class="mb-3">
          <label for="lampiran" class="form-label">Lampiran</label>
           <input type="file" name="lampiran" class="form-control mt-2">
          <div id="lampiran" class="form-text">File laporan / bukti aduan pendukung yang relevan.</div>
        </div>

        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Dengan ini, saya sudah menyetujui 
            segala ketentuan layanan dan kebijakan privasi yang ada.</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

    </div>
  </div>
</div>
@endsection