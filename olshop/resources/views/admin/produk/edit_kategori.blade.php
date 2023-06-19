@extends('admin.layout.app')
@section('content')
<!-- Taro code form disini -->

<h2 class="text-center p-3">Form Edit Data Kategori Produk</h2>
@foreach ($kategori_produk as $value)
<form method="POST" action="{{ url('admin/kategori/update/'. $value->id) }}">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="nama" class="col-4 col-form-label">Nama</label>
        <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                </div>
                <input id="nama" name="nama" placeholder="Masukan Nama Kategori" type="text" class="form-control"
                    value="{{ $value->nama }}">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</form>
    @endforeach
@endsection