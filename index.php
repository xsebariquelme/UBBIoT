<?php
//datosVolcan();
//datosJSON();
//datosAerodromo();
//estadoAire();
//estadoClima();

/* function datosVolcan()
{
$curl = curl_init('http://www.sernageomin.cl/complejo-volcanico-nevados-de-chillan/');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$page = curl_exec($curl);

if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}

curl_close($curl);
$regex = '/<span class="fusion-imageframe imageframe-none imageframe-1 hover-type-none">(.*) /s';
if ( preg_match($regex, $page, $listaVolcan) )
	echo strip_tags(substr($listaVolcan[0], 0, strpos($listaVolcan[0], '</span>')));
else 
    print "Not found"; 
}
 */

/* function santoral()
{
$json = file_get_contents('http://indicadoresdeldia.cl/webservice/indicadores.json');
$obj = json_decode($json);
echo "\n";
echo 'Santoral de hoy: '.$obj->santoral->hoy;
} */

/* function economicos()
{
$json = file_get_contents('http://indicadoresdeldia.cl/webservice/indicadores.json');
$obj = json_decode($json);
echo "\n";
echo 'Precio del dolar: '.$obj->moneda->dolar;
echo 'Precio del euro: '.$obj->moneda->euro;
echo 'UF: '.$obj->moneda->uf."\n";
echo 'UTM: '.$obj->moneda->utm;
echo 'IPC: '.$obj->moneda->ipc;
} */


/* function datosAerodromo()
{
$curl = curl_init('http://164.77.222.61/RedEmaNacional/php/VisorMMA.php?codigoNacional=360011');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$page = curl_exec($curl);

if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}

curl_close($curl);
$regex = '/<td class="temperatura" (.*) /s';
if ( preg_match($regex, $page, $list) )
	echo "Temperatura actual: ".substr((strip_tags(substr($list[0], 0, strpos($list[0], 'Temperaturas')))), 0, strpos((strip_tags(substr($list[0], 0, strpos($list[0], 'Temperaturas')))), 'o'))."°C";
else 
    print "Not found"; 
} */

function estadoAire()
{
$curl = curl_init('http://airechile.mma.gob.cl/comunas/chillan');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$page = curl_exec($curl);

if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}

curl_close($curl);
$regex = '/<h3 class="panel-title">(.*) /s';
if ( preg_match($regex, $page, $list) )
    echo strip_tags(substr($list[0], 0, strpos($list[0], ' <small>')));
else 
    print "Not found"; 
}

function estadoClima()
{
  $curl = curl_init('https://www.meteored.cl/tiempo-en_Chillan-America+Sur-Chile-Biobio--1-18264.html');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$page = curl_exec($curl);

if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}

curl_close($curl);
$regex = '/<dd class="ddDesc T1Loc" title="Descripci&oacute;n Atmosf&eacute;rica">(.*) /s';
if ( preg_match($regex, $page, $list) )
//echo $list[0];	
echo strip_tags(substr($list[0], 0, strpos($list[0], '</dd>')));
else 
    print "Not found"; 
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>UBB IoT+</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/weather/weather-icons.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">



  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="css/alertifyjs/css/alertify.css">



  <!-- =======================================================
    Theme Name: Reveal
    Theme URL: https://bootstrapmade.com/reveal-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="body">

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">UBB<span>IoT+</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
          
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Inicio</a></li>
          <li><a href="#services">Servicios</a></li>
          <li><a href="#" data-toggle="modal" data-target="#modalLRForm">Iniciar sesión</a></li>
          <li><a href="registrarse.php" >Registrarse</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->

    </div>
  </header><!-- #header -->
  
		  <!--Modal: Login / Register Form-->
		<div class="modal fade" id="modalLRForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog cascading-modal" role="document">
				<!--Content-->
				<div class="modal-content">

					<!--Modal cascading tabs-->
					<div class="modal-c-tabs">

						<!-- Nav tabs -->
						<ul class="nav nav-tabs tabs-2 light-blue darken-3" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fa fa-user mr-1"></i>Ingreso</a>
							</li>
						   
						</ul>

						<!-- Tab panels -->
						<div class="tab-content">
							<!--Panel 7-->
							<div class="tab-pane fade in show active" id="panel7" role="tabpanel">

								<!--Body-->
								<div class="modal-body mb-1">
									  <p></p>
									  <label>Usuario</label>
									  <input type="text" id="usuarioL" class="form-control input-sm" name="">
									  <label>Contraseña</label>
									  <input type="password" id="passwordL" class="form-control input-sm" name="">
									  <p></p>
								<div class="text-center mt-2">
									  <button class="btn btn-info" id="entrarSistema">Ingresar<i class="fa fa-sign-in ml-1"></i></button>
									</div> 
								</div>
								<!--Footer-->
								<div class="modal-footer">
									<button type="button" class="btn btn-outline-info waves-effect ml-auto" data-dismiss="modal">Cerrar</button>
								</div>

							</div>
							<!--/.Panel 7-->
						</div>

					</div>
				</div>
				<!--/.Content-->
			</div>
		</div>
		<!--Modal: Login / Register Form-->



 <script type="text/javascript">
    $('#modalLRForm').on('hide.bs.modal', function () {
      $('#modalLRForm').removeData();
    })

  </script>




  
  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>El tiempo en Chillán es <?php estadoClima(); ?><br></h2>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/1.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/2.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/3.jpg');"></div>
    </div>

  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">
        <div class="section-header">
          <h2>Servicios</h2>
          <p>UBB IoT Permite informar a la comunidad con diversos datos e información relevante de la ciudad de Chillán</p>
        </div>
	
        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-thermometer-half"></i></div>
              <h4 class="title"><a href="">Temperatura actual</a></h4>
              <p class="description"> 5°C</p>
            </div>
          </div>
		  <div class="col-lg-6">
            <div class="box wow fadeInRight">
			<div class="icon"><i class="fa fa-cloud"></i></div>
              <h4 class="title"><a href="">Calidad del Aire</a></h4>
              <p class="description">El estado del Aire para hoy es: <?php estadoAire(); ?></p>
            </div>
          </div>
		  <div class="col-lg-4">
		  </div>
		  <div class="col-lg-4">
		   <p align="center">Inicia sesion para conocer mas datos y personalizarlos</p>
			 <div class="col-lg-12">
					<div class="row" style="justify-content:center;display:flex">
						<div class="col-xs-12">
							<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalLRForm" type="button">Iniciar sesión</button>
						</div>
					</div>
					<div class="row"></div>
				</div>
		  </div>
			
			<div class="col-lg-4">
		    </div>
		</div>
		  
		  
		  


		      <!--==========================

DATOS EXTRA
		  <div class="col-lg-6">
            <div class="box wow fadeInLeft" data-wow-delay="0.2s">
             <div class="icon"><i class="fa fa-user"></i></div>
              <h4 class="title"><a href="">Santoral</a></h4>
              <p class="description"><?php //santoral(); ?></p> 
            </div>
          </div>
		  
		<div class="col-lg-6">
            <div class="box wow fadeInRight" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-money"></i></div>
              <h4 class="title"><a href="">Datos Economicos</a></h4>
              <p class="description"> <?php //economicos();?></p>
            </div>
        </div>
    ============================-->
          

          

        </div>

      </div>
    </section><!-- #services -->
	
  </main>

  <!--==========================
    Footer
  ============================-->
  
<audio src="lib/eltiempo.ogg" autoplay="true" controls preload="auto" autobuffer></audio>

  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Reveal</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Reveal
        -->
        <a href="https://bootstrapmade.com/">Free Bootstrap Templates</a> by BootstrapMade
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="js/alertify.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

    <style>
    audio {
    display:none;
    }   
    </style>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#entrarSistema').click(function(){
			if($('#usuarioL').val()==""){
				alertify.alert("Error","Debes agregar el usuario");
				return false;
			}else if($('#passwordL').val()==""){
				alertify.alert("Error","Debes agregar la contraseña");
				return false;
			}

			cadena="usuario=" + $('#usuarioL').val() + 
					"&password=" + $('#passwordL').val();

					$.ajax({
						type:"POST",
						url:"login.php",
						data:cadena,
						success:function(r){
							if(r==1){
								window.location="main.php";
							}else{
								alertify.alert("Error","Fallo al entrar :(");
							}
						}
					});
		});	
	});
</script>

