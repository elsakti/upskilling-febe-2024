<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function beranda()
    {
        return view('beranda.index', [
            'halaman' => 'beranda'
        ]);
    }

    public function barang()
    {
        return view('barang.index', [
            'halaman' => 'barang'
        ]);
    }

    public function kategori()
    {
        return view('kategori.index', [
            'halaman' => 'kategori'
        ]);
    }

    public function gudang()
    {
        return view('gudang.index', [
            'halaman' => 'gudang'
        ]);
    }
}
