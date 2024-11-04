@extends('layouts.admin')

@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Tambah Berita</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item">
                                <a href="/">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/berita">Berita</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Tambah Berita
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="app-content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Berita</h3>
                </div>

                @session('message')
                    <span class="mb-4 alert alert-success" role="alert">
                        {{ session('message') }}
                    </span>
                @endsession

                <div class="card-body">

                    <form action="/berita/store" method="post">
                        @csrf

                        <div class="mb-4 form-group">
                            <label for="judul">Judul Berita</label>
                            <input type="text" name="judul" id="judul" required
                                class="form-control @error('judul') is-invalid @enderror"
                                placeholder="Input judul berita...">

                            <x-input-error :messages="$errors->get('judul')" class="mt-2" />
                        </div>

                        <div class="mb-4 form-group">
                            <label for="konten">Konten berita</label>
                            <textarea name="konten" id="konten" class="form-control @error('konten') is-invalid @enderror" cols="30"
                                rows="10"></textarea>

                            <x-input-error :messages="$errors->get('konten')" class="mt-2" />
                        </div>

                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>

                </div>
            </div>

        </section>
    </main>
@endsection
