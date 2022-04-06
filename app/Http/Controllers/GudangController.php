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
            'tanggal' => $request -> tanggal,
            'nama' => $request -> nama,
            'kondisi' => $request -> kondisi
        ]);

        return redirect('/barang/add');
    }

    public function erase($id)
    {
        Gudang::destroy($id);

        return redirect('barang');
    }
}
