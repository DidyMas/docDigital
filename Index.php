<?php 
include 'functions.php';

$pagina = obtenerPaginaActual();
// if($pagina !== 'login' && $pagina !== 'create-account') {
//   include 'functions/sessions.php';
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="icon.png">
  <title>Doc. Digital</title>
    <!--Section style-->
       <!--bootstrap-->
  <link rel="stylesheet" href="platform/lib/bootstrap/dist/css/bootstrap.css" />
  <link rel="stylesheet" href="platform/lib/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="platform/lib/bootstrap/dist/css/bootstrap-grid.css" />
  <link rel="stylesheet" href="platform/lib/bootstrap/dist/css/bootstrap-grid.min.css" />
  <link rel="stylesheet" href="platform/styles/site.css" />
  <link rel="stylesheet" href="platform/styles/Form.css" />
  <link rel="stylesheet" href="platform/styles/Form.scss" />
  <link rel="stylesheet" href="platform/styles/animations.css">
  <!--Section scripts-->
  <script src="platform/lib/bootstrap/dist/js/bootstrap.js"></script>
  <script src="platform/lib/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="platform/js/modernizr-2.8.3.js"></script>
	<script src="platform/js/site.js"></script>
	<script src="platform/js/granim.js"></script>
  <script src="platform/js/granim.min.js"></script>
</head>

<body class="animate animationfadeIn">
  <header>
    <nav
      class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3 wrapper"
      id="second">
      <div class="container-fluid">
        <a class="navbar-brand">
          <img class="navimg" href="index.php" src="platform/img/Sactiva_Final_Positivo.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link NSact">Alta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link NSact">Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link NSact">Archivo</a>
            </li>
          </ul>
        </div>
        <a class="navbar-brand">
        <a class="nav-link TextS NavSact" href="platform/login.php?user=doctor">Iniciar Sesión</a> <!--href="login.php?user=<?php echo $tipo ?>"-->
        </a>
      </div>
    </nav>
  </header>
<div class="container-fluid sinbord">
<main role="main" class="pb-3">
<div class="position-relative overflow-hidden sinbord text-center bg-light">
<video autoplay muted loop id="myVideo">
  <source src="Content/Dna.mp4" type="video/mp4">
</video>
    <div class="col-md-12 p-lg-12 mx-auto my-5">
      <h1 class="display-4 fw-normal Hdoc">DocDigital</h1>
      <p class="lead fw-normal ptext">Doctor Digital, es la aplicación web de video consulta médica que te permitirá</br> obtener una orientación médica de
         forma privada y segura. Así evitarás desplazamientos y esperas.</p>
         <a class="BTns" href="platform/login.php?user=doctor">Iniciar Sesión</a> <!--href="login.php?user=<?php echo $tipo ?>"-->
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>
<div class="col-md-12" style="height:50px;"></div>
<section class="pt-12 pt-md-13 bg-gray-200">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-5 col-lg-6 order-md-2">

            <!-- Image -->
            <img src="Content/stethoscope.jpg" alt="..." class="img-fluid mb-6 mb-md-0">

          </div>
          <div class="col-12 col-md-7 col-lg-6 order-md-1">

            <!-- Heading -->
            <h2>
            Manténgase enfocado en su salud. <br>
              <span class="text-primary">Manejemos la atención</span>.
            </h2>

            <!-- Text -->
            <p class="font-size-lg text-gray-700 mb-6">
            Lorem ipsum dolor sit amet consectetur adipiscing elit porttitor aptent, justo cursus netus purus blandit convallis massa ut ac, himenaeos imperdiet lectus enim class consequat risus nam. 
            </p>

            <!-- Stats -->
            <div class="d-flex">
              <div class="pr-5">
                <h3 class="mb-0">
                  <span data-toggle="countup" data-from="0" data-to="100" data-aos="" data-aos-id="countup:in" class="aos-init aos-animate counted">100</span>%
                </h3>
                <p class="text-gray-700 mb-0">
                Satisfacción
                </p>
              </div>
              <div class="border-left border-gray-300"></div>
              <div class="px-5">
                <h3 class="mb-0">
                  <span data-toggle="countup" data-from="0" data-to="24" data-aos="" data-aos-id="countup:in" class="aos-init aos-animate counted">24</span>/
                  <span data-toggle="countup" data-from="0" data-to="7" data-aos="" data-aos-id="countup:in" class="aos-init aos-animate counted">7</span>
                </h3>
                <p class="text-gray-700 mb-0">
                Soporte
                </p>
              </div>
              <div class="border-left border-gray-300"></div>
              <div class="pl-5">
                <h3 class="mb-0">
                  <span data-toggle="countup" data-from="0" data-to="100" data-aos="" data-aos-id="countup:in" class="aos-init aos-animate counted">100</span>k+
                </h3>
                <p class="text-gray-700 mb-0">
                  Atención
                </p>
              </div>
            </div>

          </div>
        </div> <!-- / .row -->
      </div>
 <div class="col-md-12" style="height:50px;"></div>
</main>

</div>

  <footer class="border-top footer text-muted">
    <div class="container text-center Ftext">
      &copy; <a class="Ftext">Copyright 2021 Sactiva-DocDigital </a>
    </div>
  </footer>

</body>

</html>
