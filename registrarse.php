<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
	
	  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="css/alertifyjs/css/alertify.css">
</head>
<body>
<br><br><br>
<div class="container">
	<div class="row">
		
		<div class="col-lg">
			<div class="jumbotron" style="padding-top: 1rem;padding-bottom: 1rem;">
				<div class="panel panel-heading"><h1><center>Registro de usuario</center></h1></div>
				<br>
				<div class="panel panel-body">
					<form id="frmRegistro">

						<div class="form-row">
							<div class="form-group col-md-6">
							<label>Nombre</label>
							<input type="text" class="form-control" id="nombre" placeholder="Ingrese su nombre">
							</div>
							<div class="form-group col-md-6">
							<label>Apellido</label>
							<input type="text" class="form-control" id="apellido" placeholder="Ingrese su apellido">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-6">
							<label>Usuario</label>
							<input type="text" class="form-control" id="usuario" placeholder="Ingrese su usuario">
							</div>
							<div class="form-group col-md-6">
							<label for="inputPassword4">Contraseña</label>
							<input type="password" class="form-control" id="password" placeholder="Ingrese su contraseña">
							</div>
						</div>
						<h3>Seleccione sus preferencias</h3>  
						<label><b>Datos meteorológicos</b></label>
						<br>
				        <div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox" id="sen_term">
							Sensación Térmica</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="temp_max">
							Temperatura máxima</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="temp_min">
							Temperatura minima</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="est_act">
							Estado Actual</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="viento">
							Velocidad viento</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="lluv_ca">
							Lluvia caida</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="presion">
							Presion</label>
						</div>

						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="humedad">
							Humedad</label>
						</div>

						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="alert_vol">
							Alerta Volcan</label>
						</div>

						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="est_aire">
							Estado aire</label>
						</div>
						<br>
						<label><b>Indicadores económicos</b></label>
				  		<br>
						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="dolar">
							Dolar</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="euro">
							Euro</label>
						</div>

						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="uf">
							UF</label>
						</div>

						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="utm">
							UTM</label>
						</div>

						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="ipc">
							IPC</label>
						</div>
					
						<br>
						<label><b>Varios</b></label>
				  		<br>

					 
						<div class="form-check form-check-inline">
						<label class="form-check-label" >	<input class="form-check-input" type="checkbox"  id="santoral">
							Santoral</label>
						</div>
						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="l_sismo">
							Último sismo sensible</label>
						</div>

						
					

					
						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="feriado">
							Feriado cercano</label>
						</div>
						<br>
						<br>
						<label><b>Todos</b></label>
						<br>
						<div class="form-check form-check-inline">
							<label class="form-check-label" ><input class="form-check-input" type="checkbox"  id="select_all">
							Seleccionar todos</label>
						</div>
					

							<p></p>
							<div style="text-align: center;" >
							<span class="btn btn-primary"  id="registrarNuevo" >Registrar</span>
                            </div>
							<p></p>
							<div style="text-align: center;">
						      <a href="index.php" class="btn btn-secondary">Volver</a>
					        </div>
						 
					 </form>
					
				 </div>
			</div>
		</div>
		
	</div>
</div>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/alertify.js"></script>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#registrarNuevo').click(function(){

			if($('#nombre').val()==""){
				alertify.alert("Error","Debes agregar el nombre");
				return false;
			}else if($('#apellido').val()==""){
				alertify.alert("Error","Debes agregar el apellido");
				return false;
			}else if($('#usuario').val()==""){
				alertify.alert("Error","Debes agregar el usuario");
				return false;
			}else if($('#password').val()==""){
				alertify.alert("Error","Debes agregar el password");
				return false;
			}


			cadena="nombre=" + $('#nombre').val() +
					"&apellido=" + $('#apellido').val() +
					"&usuario=" + $('#usuario').val() + 
					"&password=" + $('#password').val()+
					"&sen_term=" + $('#sen_term').is(':checked')+
					"&temp_max=" + $('#temp_max').is(':checked')+
					"&temp_min=" + $('#temp_min').is(':checked')+
					"&est_act=" + $('#est_act').is(':checked')+
					"&viento=" + $('#viento').is(':checked')+
					"&lluv_ca=" + $('#lluv_ca').is(':checked')+
					"&presion=" + $('#presion').is(':checked')+
					"&humedad=" + $('#humedad').is(':checked')+
					"&alert_vol=" + $('#alert_vol').is(':checked')+
					"&est_aire=" + $('#est_aire').is(':checked')+
					"&dolar=" + $('#dolar').is(':checked')+
					"&euro=" + $('#euro').is(':checked')+
					"&uf=" + $('#uf').is(':checked')+
					"&utm=" + $('#utm').is(':checked')+
					"&ipc=" + $('#ipc').is(':checked')+
					"&santoral=" + $('#santoral').is(':checked')+
					"&l_sismo=" + $('#l_sismo').is(':checked')+
					"&feriado=" + $('#feriado').is(':checked');
					

					
					$.ajax({
						type:"POST",
						url:"registro.php",
						data:cadena,
						success:function(r){

							if(r==2){
								alertify.alert("Este usuario ya existe, prueba con otro :)");
							}
							else if(r==1){
								$('#frmRegistro')[0].reset();
								alertify.success("Agregado con exito");
									setTimeout("redireccionarPagina()",1000);
							}else{
								alertify.error("Error","Fallo al agregar");
							}
						}
					});
		});
	});
	
	function redireccionarPagina() {
  window.location = "index.php";
}
	
	
	
</script>
<script>
$(function() {
    $('#select_all').change(function(){
        var checkboxes = $(this).closest('form').find(':checkbox');
        if($(this).prop('checked')) {
          checkboxes.prop('checked', true);
        } else {
          checkboxes.prop('checked', false);
        }
    });
});
</script>

<style>
body {
    width: 100%;
    height: 400px;
    background-image: url('img/ubb.jpg');
    background-size: cover;
	background-repeat:  no-repeat;
	background-attachment: fixed;
}
</style>
