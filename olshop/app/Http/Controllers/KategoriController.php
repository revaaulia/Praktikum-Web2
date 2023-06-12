<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriProduk;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = new KategoriProduk();
        return view('admin.produk.kategori', ['kategori' => $kategori->getAllData()]);
    }
}