@extends('layouts.navbar')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No Urut</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Nama</th>
        <th scope="col">Kondisi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dataBarang as $item)
    <tr>
        <td>{{$item -> no_urut}} </td>
        <td>{{$item -> tanggal}} </td>
        <td>{{$item -> nama}} </td>
        <td>{{$item -> kondisi}} </td>
        {{-- <td><a href="/reservasi/erase/{{$item -> id}}">Hapus</a></td> --}}
    </tr>
    @endforeach
    </tbody>
  </table>
@endsection