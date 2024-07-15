@extends('layout.main')

{{-- @section('title'){{ 'about' }}@endsection --}}
{{-- @section('title','about') --}}

@section('content')
    <h2>Halaman About Baru</h2>
    <h1>Selamat Datang, di Halaman About</h1>
    <p>Nama saya adalah {{ auth()->user()->name ?? $nama_about }}</p>
    <p>Email saya adalah {{ auth()->user()->email ?? 'Email Tidak Ditemukan' }}</p>
@endsection
