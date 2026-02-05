@extends('layouts.admin')

@section('content')
    <div class="container">
        <h4>Data Admin</h4>
        <a href="{{ route('user.create') }}" class="btn btn-success">Tambah</a>
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
                        <th scope="col">Nama Admin</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->password }}</td>
                            <td>
                                <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                <a href="{{ route('user.destroy', $item->id) }}" 
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
