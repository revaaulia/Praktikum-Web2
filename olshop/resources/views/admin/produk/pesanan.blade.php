@extends('admin.layout.app')

@section('content')
<!-- ini adalah halaman pesanan -->
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Pesanan</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <a class="btn btn-primary" href="{{ url('admin/pesanan/create') }}">Tambah Pesanan</a>
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Pesanan
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Nama Pemesanan</th>
                        <th>Alamat Pemesanan</th>
                        <th>No Handphone</th>
                        <th>Email</th>
                        <th>Jumlah Pesanan</th>
                        <th>Deskripsi</th>
                        <th>Produk ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($pesanan as $value)
                    <tr>
                        <td>{{ $no }}</td>
                        <td>{{ $value->tanggal }}</td>
                        <td>{{ $value->nama_pemesan }}</td>
                        <td>{{ $value->alamat_pemesan }}</td>
                        <td>{{ $value->no_hp }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->jumlah_pesanan }}</td>
                        <td>{{ $value->deskripsi }}</td>
                        <td>{{ $value->produk_id }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ url('admin/pesanan/edit/'. $value->id) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ url('admin/pesanan/delete/'. $value->id) }}">Delete</a>
                        </td>
                    </tr>
                    @php
                        $no++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection