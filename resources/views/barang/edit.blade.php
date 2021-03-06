@extends('layouts.navbar')

@section('title')
    Inventaris | Edit
@endsection

@section('content')

<h1>Ubah Data</h1>

<div class="col-lg-5">
    <form action="/barang/update/{{ $data_gudang->id }}" method="POST">
        {{ csrf_field() }}
    
        <div class="mt-3 mb-3">
          <label for="form2" class="form-label">Nomor Registrasi</label>
          <input class="form-control" id="form2" type="number" name="no_reg" value="{{$data_gudang->no_reg}}">
        </div>
    
        <div class="mb-3">
            <label for="form3" class="form-label">Tahun</label>
            <input class="form-control" id= "form3" type="year" name="tahun" value="{{$data_gudang->tahun}}">
          </div>
    
        <div class="mb-3">
            <label for="form1" class="form-label">Nama Barang</label>
            <input class="form-control" id= "form1" type="text" name="nama" value=" {{$data_gudang->nama}}">
          </div>
    
        <div class="mb-3">
            <label for="form4" class="form-label">Kondisi</label>
            <select class="form-select" id= "form4" type="text" name="kondisi">
              <option selected>{{ $data_gudang->kondisi }}</option>
              <option value="1">Baik</option>
              <option value="2">Rusak</option>
            </select>
          </div>
        
          <div class="mb-5">
            <label for="form5" class="form-label">Jumlah Barang</label>
            <input class="form-control" id="form5" type="number" name="jumlah" value="{{ $data_gudang->jumlah }}">
          </div>

          <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

@endsection