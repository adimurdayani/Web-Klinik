@extends('layouts.admin')

@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">Edit Kategori</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item">
                                <a href="/">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/kategori">Kategori</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Kategori
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="app-content">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Kategori</h3>
                </div>

                @session('message')
                    <span class="mb-4 alert alert-success" role="alert">
                        {{ session('message') }}
                    </span>
                @endsession

                <div class="card-body">

                    <form action="/kategori/update/{{ $kategori->id }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-4 form-group">
                            <label for="name">Nama Kategori</label>
                            <input type="text" name="nama" id="nama" required
                                class="form-control @error('nama') is-invalid @enderror"
                                placeholder="Input nama kategori..." value="{{ $kategori->nama }}">

                            <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                        </div>

                        <button type="submit" class="btn btn-warning">Ubah</button>
                    </form>

                </div>
            </div>

        </section>
    </main>
@endsection
