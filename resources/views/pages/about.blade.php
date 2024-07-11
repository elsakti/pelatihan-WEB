@extends('layout.main')

{{-- @section('title'){{ 'about' }}@endsection --}}
{{-- @section('title','about') --}}

@section('content')
    <h2>Halaman About Baru</h2>
    <h1>Selamat Datang, di Halaman About</h1>
    <p>Nama saya adalah {{ $nama_about }}</p>
@endsection
