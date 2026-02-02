@extends('layouts.main')

@section('content')

<!-- Main -->
<main class="container">
    <section id="cek-tiket">
        <img src="{{ asset('img/hero-1.png') }}" class="img-fluid mx-auto d-block" alt="Gambar Tiket Aduan" style="max-width: 500px;">
    </section>

    <section id="cek-tiket" class="text-center">
        <h4>#{{ $aduan->nomor_aduan }} - {{ $aduan->subjek }}</h4>

        <span class="badge bg-info">
            {{ ucfirst($aduan->status) }}
        </span>

        <p>{{ $aduan->pesan }}</p>

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