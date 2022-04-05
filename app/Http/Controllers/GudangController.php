<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
