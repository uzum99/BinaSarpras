@extends('layouts.admin')

@section('content')
<div class="container">
    <h4>Data Kategori Aduan</h4>

    <a href="{{ route('kategori.create') }}" class="btn btn-success mb-3">Tambah</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col" width="180">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($kategori as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>
                        <!-- Edit -->
                        <a href="{{ route('kategori.edit', $item->id) }}"
                           class="btn btn-sm btn-warning">
                           Edit
                        </a>

                        <!-- Hapus -->
                        <form action="{{ route('kategori.destroy', $item->id) }}"
                              method="POST"
                              style="display:inline;"
                              onsubmit="return confirm('Apakah Anda Yakin Menghapus Data?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
