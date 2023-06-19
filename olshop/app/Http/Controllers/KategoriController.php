<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = new KategoriProduk();
        return view('admin.produk.kategori', ['kategori' => $kategori->getAllData()]);
    }
    
    public function create()
    {
        $kategori_produk = KategoriProduk::All();
        return view('admin.produk.create_kategori');
    }

    public function store(Request $request)
    {
        // buat instance baru dengan model produk
        // ambil data dari form menggunakan parameter request dari uniq name
        // simpan data yang sudah diambil ke dalam data kolom produk, menggunakan instance produk
        // simpan data menggunakan method save()
        // ketika selesai klik button simpan, kembalikan ke tampilan produk

        $kategori = new KategoriProduk();

        $kategori->nama = $request->nama;

        $kategori->save();

        return redirect('admin/kategori');
    }

    public function edit(string $id)
    {
        $kategori_produk = DB::table('kategori_produk')->where('id', $id)->get();
        return view('admin.produk.edit_kategori', compact('kategori_produk'));
    }

    public function update(Request $request)
    {
        // buat instance baru dengan model produk
        // ambil data dari form menggunakan parameter request dari uniq name
        // simpan data yang sudah diambil ke dalam data kolom produk, menggunakan instance produk
        // simpan data menggunakan method save()
        // ketika selesai klik button simpan, kembalikan ke tampilan produk

        $kategori = KategoriProduk::find($request->id);;

        $kategori->nama = $request->nama;

        $kategori->save();

        return redirect('admin/kategori');
    }
    
    public function destroy(string $id)
    {
        // buka table produk
        // cari data yang ingin di hapus bedasarkan id nya
        // hapus data menggunakan method delete()
        DB::table('kategori_produk')->where('id', $id)->delete();
        return redirect('admin/kategori');
    }
}