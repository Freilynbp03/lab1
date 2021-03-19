<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Servicio de Laboratorio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="css/landy-iconfont.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Favicon-->
    <link rel="shortcut icon" href="css/favicon.png">
  </head>
  <body>
    <!-- Modal-->
    <section id="hero" class="hero hero-home bg-gray">
      <div class="container">
        <div class="row d-flex">
          <div class="col-lg-6 text order-2 order-lg-1">
            <h1>Hospital Municipal de Laguna Salada</h1>
            <p class="hero-text">Servicio de Laboratorio</p>
            <div class="CTA">
                <a href="/patients/create" class="btn btn-primary btn-shadow btn-gradient link-scroll">Digitar Resultados</a>
                <a href="/patients" target="_blank" class="btn btn-outline-primary">IMPRIMIR RESULTADOS</a>
                <div class="relative">
                      <div class="absolute z-10 list-group bg-white w-full rounded-t-none shadow-lg"> 
                 </div>
              </div>
            </div>
            {{-- @livewire('patient-search') --}}
          </div>
          <div class="col-lg-6 order-1 order-lg-2"><img src="img/Macbook.png" alt="..." class="img-fluid"></div>
        </div>
      </div>
    </section>
  </body>
</html>