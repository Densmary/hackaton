@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

@section('content')

    <div class="container text-center ">
    <div class="row justify-content-left">
    <div class="col-md-4">
    
        <img src="../assets/images/push.jpg" height="600px" width="400px">
    </div>
        <div class="col-md-8">
                <div class= "container text-center border:primary">

                <div class="card-body" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <img class="rounded-circle" src=" ../assets/images/user.png" height="150px" width="150px">
                        <h4>Iniciar Sesión</h4>
                        <div class="container text-center col-md-3 py-2">

</div>
                        <div class="row mb-3 py-3" >
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
	
                        </div>

                        <div class="row mb-3 py-4" >
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
	
                                
                            </div>
                        </div>
                        <div class="row mb-2">
                        @if (Route::has('password.request'))
                                    <a class="btn btn-link-dark col-md-6 offset-md-4" href="{{ route('password.request') }}">
                                        {{ __('¿Olvidaste tu contraseña?') }}
                                    </a>
                                @endif
                            <!--<div class="col-md-6 offset-md-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

	
                                </div>
                            </div>
                        </div>
    -->
                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-3 py-4" >
                                <button type="submit" class="btn btn-primary">
                                    
                                    {{ __('Iniciar sesión') }}
                                </button>

                                </div>

                                <a class="btn btn-link col-md-8 offset-md-3 py-3" href="http://127.0.0.1:8000/register">
                                {{ __('¿No tienes cuenta?') }} Registrarse</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
