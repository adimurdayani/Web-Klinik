@extends('layouts.app-login')

@section('login')
    <div class="login-box">
        <div class="login-logo"> <a href="/"><b>Admin</b>LTE</a> </div> <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Masuk dengan anda</p>
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form action="{{ route('login') }}" method="post">
                    @csrf

                    <div class="mb-3 input-group">
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control"
                            placeholder="Email">
                        <div class="input-group-text">
                            <span class="bi bi-envelope"></span>
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-3 input-group">
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                            placeholder="Password">
                        <div class="input-group-text">
                            <span class="bi bi-lock-fill"></span>
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div> <!--begin::Row-->

                    <div class="row">

                        <div class="col-8">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Ingat saya
                                </label>
                            </div>
                        </div> <!-- /.col -->

                        <div class="col-4">
                            <div class="gap-2 d-grid">
                                <button type="submit" class="btn btn-primary">Masuk</button>
                            </div>
                        </div> <!-- /.col -->
                    </div> <!--end::Row-->
                </form>


                <p class="mb-1">
                    <a href="{{ route('password.request') }}">Lupa password</a>
                </p>
                <p class="mb-0">
                    <a href="{{ route('register') }}" class="text-center">
                        Registrasi
                    </a>
                </p>
            </div> <!-- /.login-card-body -->
        </div>
    </div>
@endsection
