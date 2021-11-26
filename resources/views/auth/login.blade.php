@extends('layouts.app')
@section("title") Login Account @endsection
@section('content')
    <section class="main container">
        <div class="row min-vh-100 justify-content-center align-items-center">
            <div class="col-12 col-mg-6 col-lg-5">
                <div class="my-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <img src="{{asset(\App\Base::$logo)}}" alt="" class="w-50">
                    </div>
                    <div class="border bg-white rounded-lg shadow-sm">
                        <div class="p-4">
                            <h2 class="text-center font-weight-normal">Sign In</h2>
                            <p class="text-center text-black-50 mb-4">
                                Don't have an account yet?
                                <a href="{{route('register')}}">Sign up here</a>
                            </p>
                            <a href="#" class="btn btn-lg btn-outline-secondary btn-block">
                                <i class="feather-log-in"></i>
                                Sign in with Google
                            </a>
                            <hr class="mb-5">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email</label>
                                    <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-5">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label text-muted" for="remember"> Remember me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-lg btn-block btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
