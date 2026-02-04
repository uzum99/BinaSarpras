@extends('layouts.admin')

@section('content')

<div class="container">

  <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Nomor Aduan</th>
      <th scope="col">Kategori</th>
      <th scope="col">Nama Pengirim</th>      
      <th scope="col">NIS</th>
      <th scope="col">Subjek</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($aduan as $item)
    <tr>
      <th scope="row">{{ $loop->iteration}}</th>
      <td>{{ $item->created_at }}</td>
      <td>{{ $item->nomor_aduan }}</td>
      <td>{{ $item->kategori->nama }}</td>
      <td>{{ $item->siswa->nama }}</td>
      <td>{{ $item->siswa->NIS }}</td>
      <td>{{ $item->subjek }}</td>      
      <td> <span class="badge bg-{{ 
                    $item->status == 'menunggu' ? 'secondary' :
                    ($item->status == 'proses' ? 'warning' : 'success')
                }}">
                    {{ ucfirst($item->status) }}
                </span>
              </td>
      <td> <a href="{{ route('admin.show', $item->id) }}" class="btn btn-sm btn-warning">
                    Detail
                </a> </td>
    </tr>
    @endforeach
  </tbody>
</table>

</div>

@endsection