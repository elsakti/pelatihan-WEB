@extends('layout.main')

@section('content')

    @if (session()->has('errors'))
        <div class="alert alert-danger">
            {{ session()->get('errors') }}
        </div>
    @endif

    <form action="{{ route('project_store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">Silahkan Tambahkan Judul Project! </label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>

        <div class="mb-3">
            <label for="keterangan" class="form-label">Silahkan Beri Keterangan! </label>
            <input type="text" class="form-control" id="keterangan" name="keterangan" required>
        </div>

        <div class="mb-3">
            <label for="alasan" class="form-label">Apa alasanmu? </label>
            <input type="text" class="form-control" id="alasan" name="alasan" required>
        </div>

        <a href="{{ route('project_index') }}" class="btn btn-secondary">Kembali</a>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
