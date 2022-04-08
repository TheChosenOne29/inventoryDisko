@extends('layouts.navbar')

@section('title')
    Inventaris | Index
@endsection

@section('content')
<h1>Semua Data</h1>

@if (session()->has('success-update'))
  <div class="alert alert-primary" role="alert">
    {{ session('success-update') }}
  </div>

@elseif (session()->has('success-delete'))
<div class="alert alert-danger" role="alert">
  {{ session('success-delete') }}
</div>

@elseif (session()->has('success-add'))
<div class="alert alert-success" role="alert">
  {{ session('success-add') }}
</div>
@endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">No Registrasi</th>
        <th scope="col">Tahun</th>
        <th scope="col">Nama</th>
        <th scope="col">Kondisi</th>
        <th scope="col">Jumlah</th>
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
        <td>{{$item -> jumlah}} </td>
        <td>
          <a href="/barang/erase/{{$item -> id}}">Hapus</a>
          <a href="/barang/edit/{{$item -> id}}">Ubah</a>
        </td>
    </tr>
    @endforeach
    </tbody>
  </table>
@endsection