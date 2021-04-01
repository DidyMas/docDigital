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
<div class="container">
<main role="main" class="pb-3">

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
