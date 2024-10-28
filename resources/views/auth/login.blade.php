@extends('layouts.guest')

@section('content')
    <div class="auth-full-page d-flex">
        <div class="auth-form p-3">


            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{ asset('images/cmulogo.png') }}" class="img-fluid rounded-circle" alt="CMU Logo"
                            width="120" height="120" />
                        <h1 class="h2">CENTRAL MINDANAO UNIVERSITY</h1>
                        <p class="lead">
                            Login
                        </p>
                    </div>

                    <div class="mb-3">


                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input class="form-control form-control-lg  @error('email') is-invalid @enderror"
                                    type="email" name="email" placeholder="Enter your email" required autofocus />
                                <small>
                                    @error('email')
                                        <span class="error invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input class="form-control form-control-lg  @error('password') is-invalid @enderror"
                                    type="password" name="password" placeholder="Enter your password" required />
                                <small>
                                    @error('password')
                                        <span class="error invalid-feedback">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                </small>
                            </div>

                            <div class="d-grid gap-2 mt-3">
                                <button class="btn btn-lg btn-success" type="submit">Sign in</button>
                            </div>


                            @if (Route::has('password.request'))
                                <p class="mb-1 mt-3">
                                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                </p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
