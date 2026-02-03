@extends('layouts.main')

@section('content')

<!-- Main -->
<main class="container">
    <section>
        <img src="{{ asset('img/hero-1.png') }}" class="img-fluid mx-auto d-block" alt="Gambar Tiket Aduan" style="max-width: 500px;">
    </section>

    <section id="cek-tiket" class="text-center">
        <h4>#{{ $aduan->nomor_aduan }} - {{ $aduan->subjek }}</h4>
        <div class="row py-3">
            <div class="col">{{ $aduan->siswa->nama }}</div>
            <div class="col">{{ $aduan->siswa->NIS }}</div>
            <div class="col">Tanggal : {{ $aduan->created_at->format('d M Y') }}</div>
            <div class="col"> <span class=" badge bg-info"> {{ ucfirst($aduan->status) }} </span></div>
        </div>
        <p>{{ $aduan->pesan }}</p>

        <!-- Timeline/Riwayat Aduan -->
        <hr>

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