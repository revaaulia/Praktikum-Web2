<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = new Pesanan();
        return view('admin.produk.pesanan', ['pesanan' => $pesanan->getAllData()]);
    }
}
