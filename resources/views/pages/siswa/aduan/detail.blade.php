@extends('layouts.main')

@section('content')

<!-- Main -->
<main class="container">
    <section>
        <img src="{{ asset('img/hero-1.png') }}" class="img-fluid mx-auto d-block" alt="Gambar Tiket Aduan" style="max-width: 500px;">
    </section>

    <section id="cek-tiket" class="text-center">
        <h4>#{{ $aduan->nomor_aduan }} - {{ $aduan->subjek }}</h4>
        <div class="row justify-content-center py-3">
            <div class="col-auto">{{ $aduan->siswa->nama }}</div>
            <div class="col-auto">{{ $aduan->siswa->NIS }}</div>
            <div class="col-auto">Tanggal : {{ $aduan->created_at->format('d M Y') }}</div>
            <div class="col-auto"> <span class=" badge bg-info"> {{ ucfirst($aduan->status) }} </span></div>
        </div>
        <p>{{ $aduan->pesan }}</p>

        <!-- Timeline/Riwayat Aduan -->
        <hr>

        <div class="card" style="width: 18rem;">
            <div class="card-header">
                    Timeline Aduan
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    
                </li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
            </ul>
        </div>

        <h5>Timeline Aduan</h5>

        <ul>
            <li>
                <strong>Tiket Masuk</strong><br>
                {{ $aduan->created_at->format('d M Y H:i') }}
            </li>

            @foreach ($aduan->umpanBalik as $item)
            <li>
                <strong>Respon Admin</strong><br>
                {{ $item->feedback }}<br>
                <small>{{ $item->created_at }}</small>
            </li>
            @endforeach
        </ul>

    </section>
</main>

@endsection