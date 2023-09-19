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
<section id="latest-collection">
    <div class="container">
      <div class="product-collection row">
        <div class="col-lg-7 col-md-12 left-content">
          <div class="collection-item">
            <div class="products-thumb">
              <img src="../assets/images/collection-item1.jpg" alt="collection item" class="large-image image-rounded">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 product-entry">
              <div class="categories">Push Business</div>
              <h3 class="item-subtitle">¿Eres un emprendedor? </h3>
              <p>Nosotros te ayudamos a interactuar con clientes y proveedores para ampliar tu negocio.</p>
              <div class="btn-wrap">
                <a href="login" class="d-flex align-items-center">Iniciar sesión<i class="icon icon-arrow-io"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 right-content flex-wrap">
          <div class="collection-item top-item">
            <div class="products-thumb">
              <img src="../assets/images/collection-item2.jpg" alt="collection item" class="small-image image-rounded">
            </div>
            <div class="col-md-6 product-entry">
              <div class="categories">¿Eres un proveedor?</div>
              <h5 class="item-subtitle">Contacta a mas emprededores y oferta tus productos con nosotros</h5>
              <div class="btn-wrap">
                <a href={{Route('login')}}  class="d-flex align-items-center">Iniciar sesión <i class="icon icon-arrow-io"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="collection-item bottom-item">
            <div class="products-thumb">
              <img src="../assets/images/collection-item3.jpg" alt="collection item" class="small-image image-rounded">
            </div>
            <div class="col-md-6 product-entry">
              <div class="categories">¿Eres un cliente?</div>
              <h5 class="item-subtitle">Registrate y obtén tus productos favoritos en nuestro sitio web, nuestros emprendedores te esperan.</h5>
              <div class="btn-wrap">
                <a href="login" class="d-flex align-items-center">Iniciar sesión <i class="icon icon-arrow-io"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


