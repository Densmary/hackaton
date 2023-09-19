<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Push Business</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="../assets/icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" media="all" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/vendor.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="../assets/js/modernizr.js"></script>
  </head>
  <body>

@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <div>{{ __('') }}</div>
                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('') }}
                </div>
            </div>
        </div>
    </div>
<h2 class="container text-center"> ¡Registro exitoso!</h2>
<h5 class="container text-center">Completa los siguientes campos para crear tu cuenta </h5>
<div class="container text-center py-5">
  <div class="row">
      <div class="col-md-4" >
          <img class="rounded-circle " src="../assets/images/idea.png" alt="eating challenge image" height="200px" width="300px">
          <h2>¿Eres un emprendedor?</h2>
          <p>Inicia aquí e inicia a promocionar tus productos</p>
          <p><a class="btn btn-primary" href="" role="button">Empezar</a></p>
        </div>
  <div class="col-md-4" >
    <img class="rounded-circle" src="../assets/images/prove.jpg" alt="eating challenge image" height="200px" width="300px">
    <h2>¿Eres un proveedor?</h2>
    <p>Conecta con nuestros emprendedores</p>
    <p><a class="btn btn-primary" href="" role="button">Empezar</a></p>
</div>
    <div class="col-md-4" >
      <img class="rounded-circle" src="../assets/images/dinero.jpg" alt="eating challenge image" height="200px" width="300px">
      <h2>¿Eres un cliente?</h2>
      <p>Adquiere tus productos favoritos :</p>
      <p><a class="btn btn-primary" href="" role="button">Empezar</a></p>
  </div>
</div>
</div>
@endsection


