@extends('layouts.navbar')

@section('content')
<h1>Semua Data</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No Registrasi</th>
        <th scope="col">Tahun</th>
        <th scope="col">Nama</th>
        <th scope="col">Kondisi</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dataBarang as $item)
    <tr>
        <td>{{$item -> no_reg}} </td>
        <td>{{$item -> tahun}} </td>
        <td>{{$item -> nama}} </td>
        <td>{{$item -> kondisi}} </td>
        <td>
          <a href="/barang/erase/{{$item -> id}}">Hapus</a>
          <a href="/barang/edit/{{$item -> id}}">Ubah</a>
        </td>
    </tr>
    @endforeach
    </tbody>
  </table>
@endsection