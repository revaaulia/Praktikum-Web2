@extends('layouts.app')
@section('content')
    <h2 style="text-align: center"> Hallo {{ Auth::user()->name }}</h2>
    <h2 style="text-align: center"> Selamat Datang di Halaman Frontend</h2>
@endsection