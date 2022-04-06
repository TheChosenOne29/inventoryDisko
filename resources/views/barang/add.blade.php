@extends('layouts.navbar')

@section('content')

<h1>Tambah Data</h1>

<div class="col-lg-5">
    <form action="/barang/store" method="POST">
        {{ csrf_field() }}
    
        <div class="mt-3 mb-3">
          <label for="form2" class="form-label">Nomor Registrasi</label>
          <input class="form-control" id="form2" type="number" name="no_reg">
        </div>
    
        <div class="mb-3">
            <label for="form3" class="form-label">Tanggal Masuk</label>
            <input class="form-control" id= "form3" type="date" name="tanggal">
          </div>
    
        <div class="mb-3">
            <label for="form1" class="form-label">Nama Barang</label>
            <input class="form-control" id= "form1" type="text" name="nama">
          </div>
    
        <div class="mb-3">
            <label for="form4" class="form-label">Kondisi</label>
            <input class="form-control" id= "form4" type="text" name="kondisi">
          </div>

        <div class="mb-5">
          <label for="form5" class="form-label">Jumlah Barang</label>
          <input class="form-control" id="form5" type="number" name="jumlah">
        </div>

          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection