<?php
$json = file_get_contents('http://deltacode.cl/iot/servicio.php');
$obj = json_decode($json);
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

<body id="body" onload="noback();">

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
          <li><a href="#" data-toggle="modal" data-target="#modalLRForm">Iniciar Sesión</a></li>
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
									  <form>
                    <p></p>
									  <label>Usuario</label>
									  <input type="text" id="usuarioL" class="form-control input-sm" name="">
									  <label>Contraseña</label>
									  <input type="password" id="passwordL" class="form-control input-sm" name="">
									  <p></p>
								<div class="text-center mt-2">
									  <button type="submit" class="btn btn-info" id="entrarSistema" >Ingresar<i class="fa fa-sign-in ml-1"></i></button>
									</div> 
								</div>
                </form>
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
      <h2>El Tiempo en Chillán es: <?php echo $obj[0]->datos_meteorologicos->estado_actual; ?><br></h2>
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
          <p>UBB IoT permite informar a la comunidad con diversos datos e información relevante de la ciudad de Chillán.</p>
        </div>
	
        <div class="row">

          <div class="col-lg-6">
            <div class="box wow fadeInLeft">
              <div class="icon"><i class="fa fa-thermometer-half"></i></div>
              <h4 class="title">Sensación Térmica</h4>
              <p class="description">La sensación térmica actual es de: <b> <?php echo $obj[0]->datos_meteorologicos->sensacion_termica; ?></b></p>
            </div>
          </div>
		  <div class="col-lg-6">
            <div class="box wow fadeInRight">
			<div class="icon"><i class="fa fa-cloud"></i></div>
              <h4 class="title">Calidad del Aire</h4>
              <p class="description">El estado del Aire para hoy es:<b> <?php echo $obj[0]->datos_meteorologicos->estado_aire; ?></b></p>
            </div>
          </div>
		  <div class="col-lg-4">
		  </div>
		  <div class="col-lg-4">
		   <p align="center">Inicia sesión para conocer más datos y personalizarlos.</p>
			 <div class="col-lg-12">
					<div class="row" style="justify-content:center;display:flex">
						<div class="col-xs-12">
							<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalLRForm" type="button">Iniciar Sesión</button>
						</div>
					</div>
					<div class="row"></div>
				</div>
		  </div>
			
			<div class="col-lg-4">
		    </div>
		</div>
		 

        </div>

      </div>
    </section><!-- #services -->
	
  </main>

  <!--==========================
    Footer
  ============================-->
  


  <footer id="footer">
    
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
  <script src="js/alertify.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

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


<script>
  function noback(){
   window.location.hash="no-back-button";
   window.location.hash="Again-No-back-button"
   window.onhashchange=function(){window.location.hash="no-back-button";}
}
</script>



    <style>
    audio {
    display:none;
    }   
    </style>
</body>
</html>
<?php 
echo '<script type="text/javascript">alertify.alert("UBBIoT+","Para hoy, el santoral es: ' . $obj[0]->varios->santoral_hoy . '. <br> ¡Recuerda saludar a quien conozcas con ese nombre!"); </script>';

?>