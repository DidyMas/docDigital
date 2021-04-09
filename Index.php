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
              <a class="nav-link NSact"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link NSact"></a>
            </li>
            <li class="nav-item">
              <a class="nav-link NSact"></a>
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
      <div class="row1">
        <!-- Content -->
        <div class="col-sm-6">
                <h1 class="display-4">
                La atención medica en línea es el 
                  <span class="text-primary text-highlight-warning">
                    <span class="js-text-animation">futuro</span><span class="typed-cursor typed-cursor--blink">!</span>
                  </span>
                </h1>
                <p class="lead">Conoce a nuestro equipo médico y recibe la atención especializada que te mereces.</p>

              <a class="btn btn-primary btn-wide transition-3d-hover" href="platform/login.php?user=doctor">Crear una cuenta</a>
              <a class="btn btn-link btn-wide" href="#">Lee más!<i class="fas fa-angle-right fa-sm ml-1"></i></a>
        </div>
        <!-- End Content -->
        <!-- img Shape -->
        <figure class="col-sm-6">
            <g >
              <image class="mx-auto d-block imgfluid" src="platform/img/Sactdocfble.jpg" ></image>
            </g>
          </svg>
        </figure>
        <!-- End img Shape -->
      </div>
      <div class="col-md-12" style="height:50px;"></div>
      <section class="pt-12 SacdocF">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-10 col-lg-7 text-center">
            
            <!-- Heading -->
            <h2 class="sactext">
            Lorem ipsum dolor sit amet consectetur
            </h2>

            <!-- Text -->
            <p class="sactexta">
            Lorem ipsum dolor sit amet consectetur adipiscing elit porttitor aptent, justo cursus netus purus blandit convallis massa ut ac, himenaeos imperdiet lectus enim class consequat risus nam.
            </p>

          </div>
        </div> <!-- / .row -->
        <div class="form-row">
          <div class="col-12 col-lg-6 d-lg-flex pb-1 mb-4">
            
            <!-- Card -->
            <div class="card" data-aos="fade-up">
              <div class="row">
                <div class="col-md-4 position-relative">
                  
                  <!-- Image -->
                  <img src="platform/img/SactivaDocdig.jpg" class="mx-auto d-block img-fluid" alt="...">

                </div>
                <div class="col-md-8">
                  
                  <!-- Body -->
                  <div class="card-body py-7 py-md-9 text-center">
                    
                    <!-- Heading -->
                    <h4 class="font-weight-bold">
                    Lorem ipsum dolor
                    </h4>

                    <!-- Text -->
                    <p class="text-muted mb-0">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit porttitor aptent, justo cursus netus purus blandit convallis massa ut ac, himenaeos imperdiet lectus enim class consequat risus nam.
                    </p>
                    
                  </div>

                </div>
              </div> <!-- / .row -->
            </div>
          </div>
          <div class="col-12 col-lg-6 d-lg-flex pb-1 mb-4">
            
            <!-- Card -->
            <div class="card shadow-light-lg overflow-hidden text-center aos-init aos-animate" data-aos="fade-up">
              <div class="row">
                <div class="col-md-8">
                  
                  <!-- Body -->
                  <div class="card-body py-7 py-md-9">
                    
                    <!-- Heading -->
                    <h4 class="font-weight-bold">
                    Lorem ipsum dolor
                    </h4>

                    <!-- Text -->
                    <p class="text-muted mb-0">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit porttitor aptent, justo cursus netus purus blandit convallis massa ut ac, himenaeos imperdiet lectus enim class consequat risus nam.
                    </p>
                    
                  </div>

                </div>
                <div class="col-md-4">
                  
                  <!-- Image -->
                  <img src="platform/img/SactivaDocdig1.jpg" class="mx-auto d-block img-fluid left-0" alt="...">

                </div>
              </div> <!-- / .row -->
            </div>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>
<div class="col-md-12" style="height:50px;"></div>
<div class="row">
          <div class="col-12">
            
            <!-- Card -->
            <div class="card shadow-light-lg overflow-hidden text-center text-lg-left aos-init aos-animate" data-aos="fade-up">
              <div class="row">
                <div class="col-md-4 position-relative">
                  
                  <!-- Image -->
                  <img src="platform/img/SactivaDocDig3.jpg" class="mx-auto d-block img-fluid" alt="...">

                </div>
                <div class="col-md-8">

                  <!-- Body -->
                  <div class="card-body py-7 py-md-9">
                  
                    <!-- Heading -->
                    <h4 class="font-weight-bold">
                    Lorem ipsum dolor
                    </h4>

                    <!-- Text -->
                    <p class="text-muted mb-0">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit porttitor aptent, justo cursus netus purus blandit convallis massa ut ac, himenaeos imperdiet lectus enim class consequat risus nam.
                    Lorem ipsum dolor sit amet consectetur adipiscing elit porttitor aptent, justo cursus netus purus blandit convallis massa ut ac, himenaeos imperdiet lectus enim class consequat risus nam.
                    </p>

                  </div>

                </div>
              </div> <!-- / .row -->
            </div>
          </div>
        </div> <!-- / .row -->
        <div class="col-md-12" style="height:50px;"></div>
<section class="pt-12">
    <div class="container-fluid">
        <div class="row align-items-center">
          <div class="col-12 col-md-5 col-lg-6 order-md-2">

            <!-- Image -->
            <img src="Content/stethoscope.jpg" alt="..." class="img-fluid mb-6 mb-md-0" style="border-radius: 20px;">

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
