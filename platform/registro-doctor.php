<?php 
include 'functions/functions.php';

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
  <link rel="shortcut icon" href="../icon.png">
  <title>Formulario</title>
    <!--Section style-->
       <!--bootstrap-->
  <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.css" />
  <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap-grid.css" />
  <link rel="stylesheet" href="lib/bootstrap/dist/css/bootstrap-grid.min.css" />
  <link rel="stylesheet" href="styles/site.css" />
  <link rel="stylesheet" href="styles/Form.css" />
  <link rel="stylesheet" href="styles/Form.scss" />
  <link rel="stylesheet" href="../styles/animations.css">
  <!--Section scripts-->
  <script src="lib/bootstrap/dist/js/bootstrap.js"></script>
  <script src="lib/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="js/modernizr-2.8.3.js"></script>
	<script src="js/site.js"></script>
	<script src="js/granim.js"></script>
  <script src="js/granim.min.js"></script>
</head>

<body class="animate animationfadeIn">
  <header>
    <nav
      class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3 NavSact wrapper"
      id="second">
      <div class="container">
        <a class="navbar-brand">
          <img class="navimg" src="img/Sactiva_Final_Positivo.png" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
          <ul class="navbar-nav flex-grow-1">
            <li class="nav-item">
              <a class="nav-link text-dark sepa ">Alta</a>
            </li>
          </ul>
        </div>
        <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
          <ul class="navbar-nav float-right">
            <li class="nav-item">
              <a class="nav-link TextS closeSession" href="login.php?user=doctor" >Cerrar sesión</a> <!-- login.php?user=doctor '<?php echo $tipo ?>' -->
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <div class="container">
    <main role="main" class="pb-3">
      <!-- Cuerpo Formulario -->
      <div class="container body-content">

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="doc-tab" data-toggle="tab" href="#doc" role="tab" aria-controls="doc" aria-selected="true">Registro de Doctores</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="Paciente-tab" data-toggle="tab" href="#Paciente" role="tab" aria-controls="Paciente" aria-selected="false">Registro de pacientes </a>
  </li>
  <!--<li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
  </li>-->
</ul>
<!--section paciente/doctor-->
<div class="tab-content" id="myTabContent">
<!--sectionDoctor-->
  <div class="tab-pane fade show active" id="doc" role="tabpanel" aria-labelledby="doc-tab">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="Titulo1subin">Registro de Doctores</p>
        </div>
      </div>
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Datos Doctor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Datos de pago</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Confirmación</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
      <!--Datos doc-->
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
          <div class="col-md-12" style="height:50px;"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="nombre">
                <label for="nombre" title="Nombre completo" data-title="Nombre completo"></label>
              </div>
              <span id="lblCONombre" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Cedula" maxlength="12" onkeyup="Cleantext(this)" onchange="Cleantext(this)">
                <label for="Cedula" title="Cédula" data-title="Cédula"></label>
                <script>
                  function Cleantext(obj) {
                    obj.value = obj.value.replace(/\D/g, '');
                  }
                </script>
              </div>
              <span id="lblCONombre" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Curp">
                <label for="Curp" title="Curp" data-title="Curp"></label>
              </div>
              <span id="lblCONombre" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="RFC">
                <label for="RFC" title="RFC" data-title="RFC"></label>
              </div>
              <span id="lblCONombre" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6" style="margin-top:17px;">
              <div class="custom-select">
                <select id="Especialidad">
                  <option value="Especialidad" style="color:#8c8c8c;">Especialidad</option>
                  <option value="Dermatología">Dermatología</option>
                  <option value="Ginecología y obstetricia o tocología">Ginecología y obstetricia o tocología</option>
                  <option value="Medicina de Urgencias">Medicina de Urgencias</option>
                  <option value="Oftalmología">Oftalmología</option>
                  <option value="Otorrinolaringología">Otorrinolaringología</option>
                  <option value="Traumatología">Traumatología</option>
                  <option value="Urología">Urología</option>
                  <option value="Medico general">Medico general</option>
                </select>
          
              </div>
              <span id="lblCOEspecialidad" class="textoObligatorio" style="margin-top: 15px!important; display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6 d-block d-sm-block d-md-none" style="height:20px;"></div>
            <div class="col-md-6">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="CEspecialidad" maxlength="12" onkeyup="Cleantext(this)" onchange="Cleantext(this)">
                <label for="CEspecialidad" title="Cédula Especialidad" data-title="Cédula Especialidad"></label>
                <script>
                  function Cleantext(obj) {
                    obj.value = obj.value.replace(/\D/g, '');
                  }
                </script>
              </div>
              <span id="lblCONombre" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6" style="margin-top:10px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Direccion">
                <label for="Direccion" title="Dirección" data-title="Dirección"></label>
              </div>
              <span id="lblCODireccion" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6 " style="margin-top:10px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="telefono" maxlength="12" onkeyup="Cleantext(this)" onchange="Cleantext(this)">
                <label for="telefono" title="Número teléfonico" data-title="Número teléfonico"></label>
                <script>
                  function Cleantext(obj) {
                    obj.value = obj.value.replace(/\D/g, '');
                  }
                </script>
              </div>
              <span id="lblCOTelefono" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="nombreu">
                <label for="nombreu" title="Nombre de la universidad" data-title="NNombre de la universidad"></label>
              </div>
              <span id="lblCONombre" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="telefono2" maxlength="12" onkeyup="Cleantext(this)" onchange="Cleantext(this)">
                <label for="telefono2" title="Número teléfonico 2" data-title="Número teléfonico 2"></label>
                <script>
                  function Cleantext(obj) {
                    obj.value = obj.value.replace(/\D/g, '');
                  }
                </script>
              </div>
            </div>
          </div>
        </div>
        <!--datos pago-->
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
          <div class="col-md-12" style="height:50px;"></div>
          <div class="row">
            <div class="col-md-6" style="margin-top:10px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Firm">
                <label for="Firm" title="Firma digital" data-title="Firma digital"></label>
              </div>
              <span id="lblCOFirmdig" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6" style="margin-top:10px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Cons" maxlength="12" onkeyup="Cleantext(this)" onchange="Cleantext(this)">
                <label for="Cons" title="Costo de sus consultas" data-title="Costo de sus consultas"></label>
                <script>
                  function Cleantext(obj) {
                    obj.value = obj.value.replace(/\D/g, '');
                  }
                </script>
              </div>
              <span id="lblCOCons" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6" style="margin-top:8px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Num" maxlength="18" onkeyup="Cleantext(this)" onchange="Cleantext(this)">
                <label for="Num" title="Numero" data-title="Numero"></label>
                <script>
                  function Cleantext(obj) {
                    obj.value = obj.value.replace(/\D/g, '');
                  }
                </script>
              </div>
              <span id="lblCONum" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6" style="margin-top:17px;">
              <div class="custom-select-medio">
                <select id="Mediodepago">
                  <option value="" style="color:#8c8c8c;">Medios de pago</option>
                  <option value="Tarjeta bancaria">Tarjeta bancaria</option>
                  <option value="CLABE">CLABE</option>
                  <option value="PayPal">PayPal</option>
                </select>

              </div>
              <span id="lblCOMediodepago" class="textoObligatorio" style="margin-top: 20px !important; display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6 d-block d-sm-block d-md-none" style="height:20px;"></div>
          </div>
          <div class="row">
            <div class="col-md-6" style="margin-top:17px;">
              <div class="custom-select-medio">
                <select id="Banco">
                  <option value="" style="color:#8c8c8c;">Banco</option>
                  <option value="BANAMEX">BANAMEX</option>
                  <option value="BBVA BANCOMER">BBVA BANCOMER</option>
                  <option value="SANTANDER">SANTANDER</option>
                  <option value="HSBC">HSBC</option>
                  <option value="IXE">IXE</option>
                  <option value="INBURSA">INBURSA</option>
                  <option value="AFIRME">AFIRME</option>
                  <option value="BANORTE/IXE">BANORTE/IXE</option>
                </select>

              </div>
              <span id="lblCOBanco" class="textoObligatorio" style="margin-top: 20px !important; display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6" style="margin-top:8px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Consep" maxlength="12" onkeyup="Cleantext(this)" onchange="Cleantext(this)">
                <label for="Consep" title="Concepto de pago" data-title="Concepto de pago"></label>
                <script>
                  function Cleantext(obj) {
                    obj.value = obj.value.replace(/\D/g, '');
                  }
                </script>
              </div>
              <span id="lblCOConsep" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6" style="margin-top:10px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Falt">
                <label for="Falt" title="Fecha de Alta" data-title="Fecha de Alta"></label>
              </div>
              <span id="lblCOFalt" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6" style="margin-top:10px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="FRE">
                <label for="FRE" title="Fecha de renovación" data-title="Fecha de renovación"></label>
              </div>
              <span id="lblRE" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
          </div>
        </div><!--pendiente-->
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
        <div id="screenshot" style="text-align:center;">
    <video class="videostream" autoplay=""></video>
    <img id="screenshot-img">
    <p>
        <button class="capture-button" title="Cámara" aria-label="Cámara">Capture Pick</button>
        <button id="screenshot-button" title="Captura" aria-label="Captura" disabled="">Take screenshot</button>
    </p>
</div>
<video autoplay style="display:none;"></video>
<img src="">
<canvas id="canv" style="display:none;"></canvas>
<input type="button" id="btnEnviarCamera" value="enviar" title="Enviar" aria-label="Enviar" />
<input type="button" id="btnCancelarCamera" value="cancelar" title="Cancelar" aria-label="Cancelar" />
<input type="hidden" name="idchat" value="@ViewBag.roomID" />
<input type="hidden" name="type" value="audio" />
<progress></progress>
<div id="dataUrlcontainer" style="display:none;"></div>

<script>
    $(document).ready(function () {
        $('progress').hide();
        $('#screenshot-img').hide();
    });

    $('#btnCancelarCamera').on('click', function () {

        document.querySelector('#screenshot video').srcObject.getTracks().forEach((track) => {
            track.stop();
            $('progress').show();
        });

        $("#controlsAdditional").hide();
        $("#controlsChat").show();
    });

    $(function () {

        // Reference the auto-generated proxy for the hub.
        var chat = $.connection.chatHub;

        // Start the connection.
        $.connection.hub.start().done(function () {

            $('#btnEnviarCamera').on('click', function () {

                document.querySelector('#screenshot video').srcObject.getTracks().forEach((track) => {
                    track.stop();
                    $('progress').show();
                });

                var dataURL = document.getElementById("dataUrlcontainer").innerHTML;

                $.ajax({
                    url: '@Url.Content("~/Chat/UploadIamge")',
                    type: 'POST',

                    // Form data
                    data: JSON.stringify({ idchat: $("#idchat").val(), type: $("#type").val(), image: dataURL }),
                    dataType: "json",
                    contentType: "application/json",
                    cache: false,

                    // Custom XMLHttpRequest
                    xhr: function () {
                        var myXhr = $.ajaxSettings.xhr();
                        if (myXhr.upload) {
                            // For handling the progress of the upload
                            myXhr.upload.addEventListener('progress', function (e) {
                                if (e.lengthComputable) {
                                    $('progress').show();
                                    $('progress').attr({
                                        value: e.loaded,
                                        max: e.total,
                                    });
                                }
                            }, false);
                        }
                        return myXhr;
                    },
                    success: function (result) {

                        chat.server.send($('#displayname').val(), "<a href='" + result + "' target='_blank'><img src='" + result + "' width='100px' height='100px'></a>", "@ViewBag.RoomID",'');


                        $("#controlsAdditional").hide();
                        $("#controlsChat").show();
                    }
                });
            });
        });

        const constraints = {
            video: true
        };
        const captureVideoButton = document.querySelector('#screenshot .capture-button');
        const screenshotButton = document.querySelector('#screenshot-button');
        const img = document.querySelector('#screenshot img');
        const video = document.querySelector('#screenshot video');

        const canvas = document.createElement('canvas');

        captureVideoButton.onclick = function () {
            $('#screenshot video').show();
            $('#screenshot img').hide();

            navigator.mediaDevices.getUserMedia(constraints).
                then(handleSuccess).catch(handleError);
        };

        screenshotButton.onclick = video.onclick = function () {
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext('2d').drawImage(video, 0, 0);
            // Other browsers will fall back to image/png
            img.src = canvas.toDataURL('image/webp');
            var duc = document.getElementById("dataUrlcontainer");
            duc.innerHTML = canvas.toDataURL('image/webp');
            video.pause();
            $('#screenshot video').hide();
            $('#screenshot img').show();
        };

        function handleSuccess(stream) {
            screenshotButton.disabled = false;
            video.srcObject = stream;
        }

        function handleError(error) {
            console.error('Error: ', error);
        }
    });


</script>
        </div>
      </div>
    </div>
  </div>
  <!--sectionpacientes-->
  <div class="tab-pane fade" id="Paciente" role="tabpanel" aria-labelledby="Paciente-tab">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="Titulo1subin">Registro de pacientes</p>
        </div>
      </div>

      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pills-home-tabp" data-toggle="pill" href="#pills-homep" role="tab" aria-controls="pills-homep" aria-selected="true">Datos Paciente</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-profile-tabp" data-toggle="pill" href="#pills-profilep" role="tab" aria-controls="pills-profilep" aria-selected="false">Datos de pago</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="pills-contact-tabp" data-toggle="pill" href="#pills-contactp" role="tab" aria-controls="pills-contactp" aria-selected="false">Confirmación</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
      <!--datos paciente-->
        <div class="tab-pane fade show active" id="pills-homep" role="tabpanel" aria-labelledby="pills-home-tabp">
          <div class="col-md-12" style="height:50px;"></div>
          <div class="row">
            <div class="col-md-6">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="nombre">
                <label for="nombre" title="Nombre completo" data-title="Nombre completo"></label>
              </div>
              <span id="lblCONombre" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Cedula" maxlength="12" onkeyup="Cleantext(this)" onchange="Cleantext(this)">
                <label for="Cedula" title="Cédula" data-title="Cédula"></label>
                <script>
                  function Cleantext(obj) {
                    obj.value = obj.value.replace(/\D/g, '');
                  }
                </script>
              </div>
              <span id="lblCONombre" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Curp">
                <label for="Curp" title="Curp" data-title="Curp"></label>
              </div>
              <span id="lblCONombre" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="RFC">
                <label for="RFC" title="RFC" data-title="RFC"></label>
              </div>
              <span id="lblCONombre" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6" style="margin-top:17px;">
              <div class="custom-select">
                <select id="Especialidad">
                  <option value="Especialidad" style="color:#8c8c8c;">Especialidad</option>
                  <option value="Dermatología">Dermatología</option>
                  <option value="Ginecología y obstetricia o tocología">Ginecología y obstetricia o tocología</option>
                  <option value="Medicina de Urgencias">Medicina de Urgencias</option>
                  <option value="Oftalmología">Oftalmología</option>
                  <option value="Otorrinolaringología">Otorrinolaringología</option>
                  <option value="Traumatología">Traumatología</option>
                  <option value="Urología">Urología</option>
                  <option value="Medico general">Medico general</option>
                </select>
                <!--scrip fomulario y funcionalidad estilos-->
                <script>

                  var x, i, j, selElmnt, a, b, c;

                  x = document.getElementsByClassName("custom-select");
                  for (i = 0; i < x.length; i++) {
                    selElmnt = x[i].getElementsByTagName("select")[0];

                    a = document.createElement("DIV");
                    a.setAttribute("class", "select-selected");
                    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                    x[i].appendChild(a);

                    b = document.createElement("DIV");
                    b.setAttribute("class", "select-items select-hide");
                    for (j = 1; j < selElmnt.length; j++) {

                      c = document.createElement("DIV");
                      c.setAttribute("class", "item");
                      c.innerHTML = selElmnt.options[j].innerHTML;
                      c.addEventListener("click", function (e) {

                        var y, i, k, s, h;
                        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                        h = this.parentNode.previousSibling;
                        for (i = 0; i < s.length; i++) {
                          if (s.options[i].innerHTML == this.innerHTML) {
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            for (k = 0; k < y.length; k++) {
                              y[k].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                          }
                        }
                        h.click();
                      });
                      b.appendChild(c);
                    }
                    x[i].appendChild(b);
                    a.addEventListener("click", function (e) {

                      e.stopPropagation();
                      closeAllSelect(this);
                      this.nextSibling.classList.toggle("select-hide");
                      this.classList.toggle("select-arrow-active");
                    });
                  }
                  function closeAllSelect(elmnt) {

                    var x, y, i, arrNo = [];
                    x = document.getElementsByClassName("select-items");
                    y = document.getElementsByClassName("select-selected");
                    for (i = 0; i < y.length; i++) {
                      if (elmnt == y[i]) {
                        arrNo.push(i)
                      } else {
                        y[i].classList.remove("select-arrow-active");
                      }
                    }
                    for (i = 0; i < x.length; i++) {
                      if (arrNo.indexOf(i)) {
                        x[i].classList.add("select-hide");
                      }
                    }

                    if ($("#Especialidad").val() != 'Especialidad') { $("#lblCOEspecialidad").hide(); }

                  }

                  document.addEventListener("click", closeAllSelect);
                </script>
              </div>
              <span id="lblCOEspecialidad" class="textoObligatorio" style="margin-top: 15px!important; display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6 d-block d-sm-block d-md-none" style="height:20px;"></div>
            <div class="col-md-6">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="CEspecialidad" maxlength="12" onkeyup="Cleantext(this)" onchange="Cleantext(this)">
                <label for="CEspecialidad" title="Cédula Especialidad" data-title="Cédula Especialidad"></label>
                <script>
                  function Cleantext(obj) {
                    obj.value = obj.value.replace(/\D/g, '');
                  }
                </script>
              </div>
              <span id="lblCONombre" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6" style="margin-top:10px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Direccion">
                <label for="Direccion" title="Dirección" data-title="Dirección"></label>
              </div>
              <span id="lblCODireccion" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6 " style="margin-top:10px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="telefono" maxlength="12" onkeyup="Cleantext(this)" onchange="Cleantext(this)">
                <label for="telefono" title="Número teléfonico" data-title="Número teléfonico"></label>
                <script>
                  function Cleantext(obj) {
                    obj.value = obj.value.replace(/\D/g, '');
                  }
                </script>
              </div>
              <span id="lblCOTelefono" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="nombreu">
                <label for="nombreu" title="Nombre de la universidad" data-title="NNombre de la universidad"></label>
              </div>
              <span id="lblCONombre" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="telefono2" maxlength="12" onkeyup="Cleantext(this)" onchange="Cleantext(this)">
                <label for="telefono2" title="Número teléfonico 2" data-title="Número teléfonico 2"></label>
                <script>
                  function Cleantext(obj) {
                    obj.value = obj.value.replace(/\D/g, '');
                  }
                </script>
              </div>
            </div>
          </div>
        </div>
      <!--datos pago-->
        <div class="tab-pane fade" id="pills-profilep" role="tabpanel" aria-labelledby="pills-profile-tabp">
          <div class="col-md-12" style="height:50px;"></div>
          <div class="row">
            <div class="col-md-6" style="margin-top:10px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Firm">
                <label for="Firm" title="Firma digital" data-title="Firma digital"></label>
              </div>
              <span id="lblCOFirmdig" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6" style="margin-top:10px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Cons" maxlength="12" onkeyup="Cleantext(this)" onchange="Cleantext(this)">
                <label for="Cons" title="Costo de sus consultas" data-title="Costo de sus consultas"></label>
                <script>
                  function Cleantext(obj) {
                    obj.value = obj.value.replace(/\D/g, '');
                  }
                </script>
              </div>
              <span id="lblCOCons" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6" style="margin-top:8px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Num" maxlength="18" onkeyup="Cleantext(this)" onchange="Cleantext(this)">
                <label for="Num" title="Numero" data-title="Numero"></label>
                <script>
                  function Cleantext(obj) {
                    obj.value = obj.value.replace(/\D/g, '');
                  }
                </script>
              </div>
              <span id="lblCONum" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6" style="margin-top:17px;">
              <div class="custom-select-medio">
                <select id="Mediodepago">
                  <option value="" style="color:#8c8c8c;">Medios de pago</option>
                  <option value="Tarjeta bancaria">Tarjeta bancaria</option>
                  <option value="CLABE">CLABE</option>
                  <option value="PayPal">PayPal</option>
                </select>

              </div>
              <span id="lblCOMediodepago" class="textoObligatorio" style="margin-top: 20px !important; display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6 d-block d-sm-block d-md-none" style="height:20px;"></div>
          </div>
          <div class="row">
            <div class="col-md-6" style="margin-top:17px;">
              <div class="custom-select-medio">
                <select id="Banco">
                  <option value="" style="color:#8c8c8c;">Banco</option>
                  <option value="BANAMEX">BANAMEX</option>
                  <option value="BBVA BANCOMER">BBVA BANCOMER</option>
                  <option value="SANTANDER">SANTANDER</option>
                  <option value="HSBC">HSBC</option>
                  <option value="IXE">IXE</option>
                  <option value="INBURSA">INBURSA</option>
                  <option value="AFIRME">AFIRME</option>
                  <option value="BANORTE/IXE">BANORTE/IXE</option>
                </select>
                <!--scrip fomulario y funcionalidad estilos-->
                <script>
                  var x, i, j, selElmnt, a, b, c;

                  x = document.getElementsByClassName("custom-select-medio");
                  for (i = 0; i < x.length; i++) {
                    selElmnt = x[i].getElementsByTagName("select")[0];

                    a = document.createElement("DIV");
                    a.setAttribute("class", "select-selected");
                    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
                    x[i].appendChild(a);

                    b = document.createElement("DIV");
                    b.setAttribute("class", "select-items select-hide");
                    for (j = 1; j < selElmnt.length; j++) {

                      c = document.createElement("DIV");
                      c.setAttribute("class", "item");
                      c.innerHTML = selElmnt.options[j].innerHTML;
                      c.addEventListener("click", function (e) {

                        var y, i, k, s, h;
                        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                        h = this.parentNode.previousSibling;
                        for (i = 0; i < s.length; i++) {
                          if (s.options[i].innerHTML == this.innerHTML) {
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            for (k = 0; k < y.length; k++) {
                              y[k].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                          }
                        }
                        h.click();
                      });
                      b.appendChild(c);
                    }
                    x[i].appendChild(b);
                    a.addEventListener("click", function (e) {

                      e.stopPropagation();
                      closeAllSelect(this);
                      this.nextSibling.classList.toggle("select-hide");
                      this.classList.toggle("select-arrow-active");
                    });
                  }
                  function closeAllSelect(elmnt) {

                    var x, y, i, arrNo = [];
                    x = document.getElementsByClassName("select-items");
                    y = document.getElementsByClassName("select-selected");
                    for (i = 0; i < y.length; i++) {
                      if (elmnt == y[i]) {
                        arrNo.push(i)
                      } else {
                        y[i].classList.remove("select-arrow-active");
                      }
                    }
                    for (i = 0; i < x.length; i++) {
                      if (arrNo.indexOf(i)) {
                        x[i].classList.add("select-hide");
                      }
                    }

                    if ($("#medio").val() != '') { $("#lblCOMedio").hide(); }

                  }

                  document.addEventListener("click", closeAllSelect);
                </script>
              </div>
              <span id="lblCOBanco" class="textoObligatorio" style="margin-top: 20px !important; display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6" style="margin-top:8px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Consep" maxlength="12" onkeyup="Cleantext(this)" onchange="Cleantext(this)">
                <label for="Consep" title="Concepto de pago" data-title="Concepto de pago"></label>
                <script>
                  function Cleantext(obj) {
                    obj.value = obj.value.replace(/\D/g, '');
                  }
                </script>
              </div>
              <span id="lblCOConsep" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6" style="margin-top:10px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="Falt">
                <label for="Falt" title="Fecha de Alta" data-title="Fecha de Alta"></label>
              </div>
              <span id="lblCOFalt" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
            <div class="col-md-6" style="margin-top:10px;">
              <div class="field Ajusttex">
                <input type="text" required autocomplete="off" id="FRE">
                <label for="FRE" title="Fecha de renovación" data-title="Fecha de renovación"></label>
              </div>
              <span id="lblRE" class="textoObligatorio" style="display:none;">Campo obligatorio</span>
            </div>
          </div>
        </div>
      <!--datos pendiente-->
      <div class="tab-pane fade" id="pills-contactp" role="tabpanel" aria-labelledby="pills-contact-tabp">pendente</div>
      </div>
    </div>
  </div>
</div>
</div>
 <div class="col-md-12" style="height:50px;"></div>
</main>

</div>

  <footer class="border-top footer text-muted">
    <div class="container text-center Ftext">
      &copy; <a class="Ftext">©Copyright 2021 Sactiva-DocDigital </a>
    
    </div>
  </footer>
  <script src="lib/jquery/dist/jquery.min.js"></script>
  <script src="lib/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="http://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>
