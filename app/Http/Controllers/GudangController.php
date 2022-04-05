<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class GudangController extends Controller
{
    public function index()
    {
        return view ('barang.index');
    }

    public function add()
    {
        return view ('barang.add');
    }

    public function edit()
    {
        return view ('barang.edit');
    }

    public function store(Request $request)
    {
        DB::table('gudangs') -> insert([
            'no_urut' => $request -> no_urut,
            'tanggal' => $request -> tanggal,
            'nama' => $request -> nama,
            'kondisi' => $request -> kondisi
        ]);

        return view('barang.add');
    }
}
