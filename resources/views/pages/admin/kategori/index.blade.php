@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4>Data Kategori Aduan</h4>
        <a href="{{ route('kategori.create') }}" class="btn btn-success">Tambah</a>
        <div class="py-3">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Kategori</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nama }}</td>
                            <td>
                                <a href="{{ route('kategori.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route('kategori.destroy', $item->id) }}" 
                                    class="btn btn-sm btn-danger" method="POST" 
                                    onsubmit="return confirm('Yakin hapus kategori ini?')"> @method('DELETE')
                                    Hapus</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>

        </div>
    </div>
@endsection
