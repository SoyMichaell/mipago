@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-login">
            <div class="col-md-5">
                <div class="card-custom">
                    <div class="card-body">
                        <form action="" method="post">
                            @csrf
                            <div class="row mb-3">
                                <input class="form-control @error('email') is-invalid @enderror" type="text" name="email"
                                    id="email" value="{{ old('email') }}" placeholder="Correo electronico">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row mb-3">
                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="Contraseña">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row mb-0">
                                <button class="btn btn-primary" type="submit">
                                    Iniciar sesión
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
