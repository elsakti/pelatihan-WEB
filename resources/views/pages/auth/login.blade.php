@extends('layout.main')

@section('content')

    @if (session()->has('errors'))
        <div class="alert alert-danger">
            {{ session()->get('errors') }}
        </div>
    @endif

    <form action="{{ route('authenticate') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Silahkan Masukkan Email Anda : </label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Silahkan Masukkan Password :</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <a href="{{ route('project_index') }}" class="btn btn-secondary">Kembali</a>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection
