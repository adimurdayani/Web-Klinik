@extends('layouts.admin')

@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Berita</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item">
                                <a href="/">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Berita
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="app-content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Berita</h3>
                </div>

                @session('message')
                    <span class="mb-4 alert alert-success" role="alert">
                        {{ session('message') }}
                    </span>
                @endsession


                <div class="card-body">

                    <div class="text-end">
                        <a href="/berita/create" class="btn btn-primary">Tambah data</a>
                    </div>

                    <table class="table table-striped w-100">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Judul</th>
                                <th>Konten</th>
                                <th>Gambar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($berita as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->konten }}</td>
                                    <td>{{ $item->gambar }}</td>
                                    <td class="form-inline">
                                        <a href="/berita/{{ $item->id }}/edit" class="btn btn-warning">
                                            Edit
                                        </a>

                                        <form action="/berita/{{ $item->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="confirm('Apakah anda yakin?')"
                                                class="btn btn-danger">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Data tidak ada!</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>
            </div>

        </section>
    </main>
@endsection
