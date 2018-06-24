<?php 

	require_once "conexion.php";
	$conexion=conexion();

		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$usuario=$_POST['usuario'];
		$password=sha1($_POST['password']);
		
		$sen_term=$_POST['sen_term'];
		if($sen_term=="true"){
		$sen_term=1;
	    }else{ 
			$sen_term=0;
		}
		$temp_max=$_POST['temp_max'];
		if($temp_max=="true"){
			$temp_max=1;	
		}else{ 
		 	$temp_max=0;
	    }
	
		

		if(buscaRepetido($usuario,$password,$conexion)==1){
			echo 2;
		}else{
			$sql="INSERT into usuarios (nombre,apellido,usuario,password,sen_term,temp_max)
				values ('$nombre','$apellido','$usuario','$password','$sen_term','$temp_max')";
			echo $result=mysqli_query($conexion,$sql);
		}


		function buscaRepetido($user,$pass,$conexion){
			$sql="SELECT * from usuarios 
				where usuario='$user' and password='$pass'";
			$result=mysqli_query($conexion,$sql);

			if(mysqli_num_rows($result) > 0){
				return 1;
			}else{
				return 0;
			}
		}

 ?>