@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

@section('content')
<div class="container text-center ">
    <div class="row justify-content-right">

    <div class="col-md-8 text-center">

                <div class="container text-center border:primary">

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <img class="rounded-circle" src=" ../assets/images/user.png" height="150px" width="150px">
                        <h4>Registrarse</h4>
                        <div class="container text-center col-md-3 py-2">
</div>
                        <div class="row mb-3 py-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end">{{ __('Edad') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="number" min="18" max="80" class="form-control @error('age') is-invalid @enderror" name="age">
                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="row mb-3">
                            <label for="membership" class="col-md-4 col-form-label text-md-end py-3">{{__('Tipo de Usuario')}}</label>
                            
                            <div class="col-md-6">
                                <input id="membership" type="number" min="1" {{--max="3"--}} class="form-control @error('membership') is-invalid @enderror" name="membership">

                                @error ('membership')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrarse') }}
                                </button>
                            </div>
                            </div>
                            <a class="btn btn-link col-md-8 offset-md-2 py-4" href="http://127.0.0.1:8000/login">
                                {{ __('¿Ya tienes cuenta?') }} Iniciar Sesión</a>
                        </div>
                    </form>
                    
                </div>
            </div>
            <div class="col-md-4">
                    <img src="../assets/images/push.jpg"  height="700px" width="500px">
                    </div>
    </div>
</div>
@endsection