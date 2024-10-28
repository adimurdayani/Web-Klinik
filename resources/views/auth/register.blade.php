@extends('layouts.app-login')

@section('login')
    <div class="register-box">

        <div class="register-logo">
            <a href="/"><b>Admin</b>LTE</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="register-box-msg">Registrasi akun baru.</p>

                <form action="{{ route('register') }}" method="post">
                    @csrf

                    <div class="mb-3 input-group">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                            placeholder="Full Name">
                        <div class="input-group-text">
                            <span class="bi bi-person"></span>
                        </div>

                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mb-3 input-group">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                            placeholder="Email">
                        <div class="input-group-text">
                            <span class="bi bi-envelope"></span>
                        </div>

                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-3 input-group">
                        <input type="password" class="form-control" name="password" placeholder="Password"
                            autocomplete="new-password">
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>

                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="mb-3 input-group">
                        <input type="password" class="form-control" name="password_confirmation"
                            placeholder="Confirm Password" autocomplete="new-password">
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>

                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="row">
                        <div class="col-8">
                            <a href="{{ route('login') }}">Sudah memiliki akun.</a>
                        </div> <!-- /.col -->
                        <div class="col-4">
                            <div class="gap-2 d-grid">
                                <button type="submit" class="btn btn-primary">Daftar</button>
                            </div>
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </form>

            </div> <!-- /.register-card-body -->
        </div>
    </div>
@endsection
