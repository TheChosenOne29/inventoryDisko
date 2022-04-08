<?php

namespace App\Http\Controllers;

use App\Models\Gudang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GudangController extends Controller
{
    public function index()
    {
        return view('/barang/index', [
            'dataBarang' => Gudang::all()
        ]);
    }

    public function add()
    {
        return view ('/barang/add');
    }

    // public function edit(Request $request, $id)
    // {
    //     $gudang = Gudang::find($id);

    //     $gudang->update([
    //         'no_urut' => $request -> no_urut,
    //         'tanggal' => $request -> tanggal,
    //         'nama' => $request -> nama,
    //         'kondisi' => $request -> kondisi
    //     ]);
    // }

    public function edit($id)
    {
        return view('barang.edit', [
            'data_gudang' => Gudang::find($id)
        ]);
    }

    public function store(Request $request)
    {
        Gudang::create([
            'no_reg' => $request -> no_reg,
            'tahun' => $request -> tahun,
            'nama' => $request -> nama,
            'kondisi' => $request -> kondisi,
            'jumlah' => $request -> jumlah
        ]);

        return redirect('/barang/index')->with('success-add', 'Tambah Data Sukses');
    }

    public function update($id, Request $request)
    {
        $gudang = Gudang::find($id);
        $gudang->update([
            'no_reg' => $request -> no_reg,
            'tahun' => $request -> tahun,
            'nama' => $request -> nama,
            'kondisi' => $request -> kondisi,
            'jumlah' => $request -> jumlah
        ]);
        // return redirect('/barang/index');
        return redirect()->intended('/barang')->with('success-update', 'Update Data Sukses');
    }
    
    public function erase($id)
    {
        Gudang::destroy($id);

        return redirect()->intended('/barang')->with('success-delete', 'Delete Data Sukses');
    }
}
