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
<body style="background-color: lightblue">
<br><br><br>
<div class="container">
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4">
			<div class="jumbotron">
				<div class="panel panel-heading">Registro de usuario</div>
				<div class="panel panel-body">
					<form id="frmRegistro">
					
					<div class="form-group">
					<label>Nombre :</label>
					<input type="text" class="form-control input-sm" id="nombre" name="">
					</div>
					
					<label>Apellido</label>
					<input type="text" class="form-control input-sm" id="apellido" name="">
					<label>Usuario</label>
					<input type="text" class="form-control input-sm" id="usuario" name="">
					<label>Password</label>
					<input type="text" class="form-control input-sm" id="password" name="">
					<p></p>
					<span class="btn btn-primary" id="registrarNuevo">Registrar</span>
					</form>
					<div style="text-align: right;">
						<a href="index.php" class="btn btn-secondary">Login</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-4"></div>
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
					"&password=" + $('#password').val();

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
									setTimeout("redireccionarPagina()", 1000);
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

