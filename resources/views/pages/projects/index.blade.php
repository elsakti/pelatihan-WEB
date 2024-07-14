@extends('layout.main')

{{-- @section('title'){{ 'Project' }}@endsection --}}
{{-- @section('title','Project') --}}

@section('content')

    <h1>Selamat Datang, di Halaman Project Saya</h1>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <a class="btn btn-primary mt-5 mb-2" href="{{ route('project_create') }}" data-bs-toggle="tooltip" data-bs-title="Tambah Project" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
            <path d="m.5 3 .04.87a2 2 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2m5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19q-.362.002-.683.12L1.5 2.98a1 1 0 0 1 1-.98z"/>
            <path d="M13.5 9a.5.5 0 0 1 .5.5V11h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V12h-1.5a.5.5 0 0 1 0-1H13V9.5a.5.5 0 0 1 .5-.5"/>
        </svg>
    </a>

    <table class="table table-bordered border-primary">
        <thead class="table-danger">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Project</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Alasan</th>
            <th scope="col">Dibuat Pada</th>
            <th scope="col">Diperbarui Pada</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @forelse ($projects as $project)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $project->judul }}</td>
                <td>{{ $project->keterangan }}</td>
                <td>{{ $project->alasan }}</td>
                <td>{{ $project->created_at }}</td>
                <td>{{ $project->updated_at }}</td>
                <td>
                    <form action="{{ route('project_delete', $project->id ) }}"
                        method="POST"
                        onsubmit="return confirm('Yakin ingin menghapus data?')">

                        <a href="{{ route('project_edit', $project->id ) }}" class="btn btn-warning">
                            EDIT
                        </a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            HAPUS
                        </button>
                    </form>

                </td>
            </tr>

            @empty

                <th colspan="7" style="text-align: center">Data kosong, atau tidak ditemukan</th>

            @endforelse


        </tbody>
      </table>

@endsection
