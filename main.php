<?php
session_start(); 

$session_value=(isset($_SESSION['sen_term']))?$_SESSION['sen_term']:'';
$session_value2=(isset($_SESSION['temp_max']))?$_SESSION['temp_max']:'';

$session_value3=(isset($_SESSION['temp_min']))?$_SESSION['temp_min']:'';
$session_value4=(isset($_SESSION['est_act']))?$_SESSION['est_act']:'';
$session_value5=(isset($_SESSION['viento']))?$_SESSION['viento']:'';
$session_value6=(isset($_SESSION['lluv_ca']))?$_SESSION['lluv_ca']:'';
$session_value7=(isset($_SESSION['presion']))?$_SESSION['presion']:'';
$session_value8=(isset($_SESSION['humedad']))?$_SESSION['humedad']:'';
$session_value9=(isset($_SESSION['alert_vol']))?$_SESSION['alert_vol']:'';
$session_value10=(isset($_SESSION['est_aire']))?$_SESSION['est_aire']:'';

$session_value11=(isset($_SESSION['dolar']))?$_SESSION['dolar']:'';
$session_value12=(isset($_SESSION['euro']))?$_SESSION['euro']:'';
$session_value13=(isset($_SESSION['uf']))?$_SESSION['uf']:'';
$session_value14=(isset($_SESSION['utm']))?$_SESSION['utm']:'';
$session_value15=(isset($_SESSION['ipc']))?$_SESSION['ipc']:'';

$session_value16=(isset($_SESSION['santoral']))?$_SESSION['santoral']:'';
$session_value17=(isset($_SESSION['l_sismo']))?$_SESSION['l_sismo']:'';

$session_value19=(isset($_SESSION['feriado']))?$_SESSION['feriado']:'';



?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
   <!-- <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png"> -->
    <title>UBB IoT+</title>

    <link href="assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
	<link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
	  <link rel="stylesheet" type="text/css" href="css/alertifyjs/css/themes/default.css">
  <link rel="stylesheet" type="text/css" href="css/alertifyjs/css/alertify.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        
                    </ul>
					
				    <!-- Logo -->
                    <ul class="navbar-nav"><a class="navbar-brand" >
                        <!-- Logo icon -->
                        <b><img src="assets/images/ubbiot.png" alt="homepage"  class="center"class="dark-logo" /></b>
                        <!--End Logo icon -->
                        
                    </a>
					</ul>
                <!-- End Logo -->
					
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">    
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/user.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="#"><i class="ti-user"></i><?php
                                    echo "<br>".$_SESSION['nombre'] ." "; 
                                    echo $_SESSION['apellido'] ."<br>";
                                    ?> Perfil</a></li>
                                   
                                    <li><a href="salir.php"><i class="fa fa-power-off"></i> Cerrar Sesión</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
         </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Menú</li>
                        
                        <li> <a onClick="cargar2('portada',<?php echo $session_value;?>,<?php echo $session_value2;?>,<?php echo $session_value3;?>, <?php echo $session_value4;?>, <?php echo $session_value5;?>, <?php echo $session_value6;?>, <?php echo $session_value7;?>, <?php echo $session_value8;?>, <?php echo $session_value9;?>, <?php echo $session_value10;?>, <?php echo $session_value11;?>, <?php echo $session_value12;?>, <?php echo $session_value13;?>, <?php echo $session_value14;?>, <?php echo $session_value15;?>, <?php echo $session_value16;?>, <?php echo $session_value17;?>, <?php echo $session_value19;?> );"class="" href="#" aria-expanded="false"><i class="fa fa-star"></i><span class="hide-menu">Destacados </span></a>
                            
                        </li>
						<li> <a onClick="cargar('divD',2);" class="" href="#" aria-expanded="false"><i class="fa fa-thermometer-full"></i><span class="hide-menu">Datos meteorologicos </span></a>
                            
                        </li>
						<li> <a onClick="cargar2('divD',3);"class="" href="#" aria-expanded="false"><i class="fa fa-money"></i><span class="hide-menu">Indicadores económicos </span></a>
                            
                        </li>
						<li> <a onClick="cargar2('divD',4);" class="" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Varios </span></a>
                            
                        </li>
					
                        
                    </ul>
                 </nav>
                <!-- End Sidebar navigation -->
             </div>
            <!-- End Sidebar scroll-->
         </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Destacados</h3> </div>
                
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid" id="contentf">
           <!-- End Container fluid  -->
           </div>
      
         <!-- End Page wrapper  -->
         </div>
     <!-- End Wrapper -->
     </div>
    <!-- All Jquery -->
    <script src="assets/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="assets/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="assets/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>

    <!--cargar cargar 1 -->
   <script type="text/Javascript" >
    function cargar(a,b){
	$('#contentf').html('<img src="lo.gif">');
	$('#contentf').load(a+'.php',{b:b});
    }	
    </script>
    <!--cargar 2-->
    <script type="text/Javascript" >
    var myvar='<?php echo $session_value;?>';
    var myvar2='<?php echo $session_value2;?>';

    var myvar3='<?php echo $session_value3;?>';
    var myvar4='<?php echo $session_value4;?>';
    var myvar5='<?php echo $session_value5;?>';
    var myvar6='<?php echo $session_value6;?>';
    var myvar7='<?php echo $session_value7;?>';
    var myvar8='<?php echo $session_value8;?>';
    var myvar9='<?php echo $session_value9;?>';
    var myvar10='<?php echo $session_value10;?>';

    var myvar11='<?php echo $session_value11;?>';
    var myvar12='<?php echo $session_value12;?>';
    var myvar13='<?php echo $session_value13;?>';
    var myvar14='<?php echo $session_value14;?>';
    var myvar15='<?php echo $session_value15;?>';

    var myvar16='<?php echo $session_value16;?>';
    var myvar17='<?php echo $session_value17;?>';
  

    var myvar19='<?php echo $session_value19;?>';
  



    function cargar2(a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,t){
	$('#contentf').html('<img src="lo.gif">');
	$('#contentf').load(a+'.php',{b:b,c:c,d:d,e:e,f:f,g:g,h:h,i:i,j:j,k:k,l:l,m:m,n:n,o:o,p:p,q:q,r:r,t:t});
    }	

    $(document).ready(function(){
        cargar2('portada',myvar,myvar2,myvar3,myvar4,myvar5,myvar6,myvar7,myvar8,myvar9,myvar10,myvar11,myvar12,myvar13,myvar14,myvar15,myvar16,myvar17,myvar19);
    })
    </script>
    



    <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/lib/weather/weather-init.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>

    <!--Custom JavaScript -->
    <script src="assets/js/scripts.js"></script>
	<script src="js/alertify.js"></script>
<?php 

$json = file_get_contents('http://deltacode.cl/iot/servicio.php');
$obj = json_decode($json);


echo '<script type="text/javascript">alertify.alert("UBBIoT+","Hola ' . $_SESSION['nombre'] . ', abrigate hoy la temperatura minima es de ' .$obj[0]->datos_meteorologicos->temperatura_minima. '°C"); </script>';
?>
 </body>

 </html>