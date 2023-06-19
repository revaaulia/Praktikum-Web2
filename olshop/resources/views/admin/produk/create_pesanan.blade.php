@extends('admin.layout.app')
@section('content')
<!-- Taro code form disini -->

<h2 class="text-center p-3">Form Tambah Data Pesanan Produk</h2>
<form method="POST" action="{{ url('admin/pesanan/store') }}">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <input id="tanggal" name="tanggal" type="date" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
        <div class="col-8">
            <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="alamar_pemesan" class="col-4 col-form-label">Alamat Pemesan</label>
        <div class="col-8">
            <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="no_hp" class="col-4 col-form-label">Nomor HP</label>
        <div class="col-8">
            <input id="no_hp" name="no_hp" type="number" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="email" class="col-4 col-form-label">Email</label>
        <div class="col-8">
            <input id="email" name="email" type="email" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
        <div class="col-8">
            <input id="jumlah_pesanan" name="jumlah_pesanan" type="number" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
        <div class="col-8">
            <input id="deskripsi" name="deskripsi" type="text" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label for="produk_id" class="col-4 col-form-label">Nama Produk</label>
        <div class="col-8">
            <select id="produk_id" name="produk_id" class="custom-select">
                <option value="" selected disabled>Pilih Produk</option>
                @foreach ($produk as $value)
                <option value="{{ $value->id }}">{{ $value->nama }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

@endsection