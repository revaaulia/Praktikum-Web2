@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           <h2 style="text-align: center">Hallo {{ Auth::user()->name }} Selamat anda berhasil registrasi</h2>
           <h4 style="text-align: center">Silahkan Logout untuk masuk ke dashboard</h4>
        </div>
    </div>
</div>
@endsection
