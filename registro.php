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
		$temp_min=$_POST['temp_min'];
		if($temp_min=="true"){
			$temp_min=1;	
		}else{ 
			$temp_min=0;
		}

		$est_act=$_POST['est_act'];
		if($est_act=="true"){
			$est_act=1;	
		}else{ 
		 	$est_act=0;
		}

		$viento=$_POST['viento'];
		if($viento=="true"){
			$viento=1;	
		}else{ 
		 	$viento=0;
		}

		$lluv_ca=$_POST['lluv_ca'];
		if($lluv_ca=="true"){
			$lluv_ca=1;	
		}else{ 
		 	$lluv_ca=0;
		}

		$presion=$_POST['presion'];
		if($presion=="true"){
			$presion=1;	
		}else{ 
		 	$presion=0;
		}

		$humedad=$_POST['humedad'];
		if($humedad=="true"){
			$humedad=1;	
		}else{ 
		 	$humedad=0;
		}

		$alert_vol=$_POST['alert_vol'];
		if($alert_vol=="true"){
			$alert_vol=1;	
		}else{ 
		 	$alert_vol=0;
		}
		$est_aire=$_POST['est_aire'];
		if($est_aire=="true"){
			$est_aire=1;	
		}else{ 
		 	$est_aire=0;
		}



		$dolar=$_POST['dolar'];
		if($dolar=="true"){
			$dolar=1;	
		}else{ 
			$dolar=0;
		}
		$euro=$_POST['euro'];
		if($euro=="true"){
			$euro=1;	
		}else{ 
			$euro=0;
		}
		$uf=$_POST['uf'];
		if($uf=="true"){
			$uf=1;	
		}else{ 
			$uf=0;
		}
		$utm=$_POST['utm'];
		if($utm=="true"){
			$utm=1;	
		}else{ 
			$utm=0;
		}
		$ipc=$_POST['ipc'];
		if($ipc=="true"){
			$ipc=1;	
		}else{ 
			$ipc=0;
		}

		$santoral=$_POST['santoral'];
		if($santoral=="true"){
			$santoral=1;	
		}else{ 
			$santoral=0;
		}
		$l_sismo=$_POST['l_sismo'];
		if($l_sismo=="true"){
			$l_sismo=1;	
		}else{ 
			$l_sismo=0;
		}
		$mag_sis=$_POST['mag_sis'];
		if($mag_sis=="true"){
			$mag_sis=1;	
		}else{ 
			$mag_sis=0;
		}

		$feriado=$_POST['feriado'];
		if($feriado=="true"){
			$feriado=1;	
		}else{ 
			$feriado=0;
		}
		$fferiado=$_POST['fferiado'];
		if($fferiado=="true"){
			$fferiado=1;	
		}else{ 
			$fferiado=0;
		}


		if(buscaRepetido($usuario,$password,$conexion)==1){
			echo 2;
		}else{
			$sql="INSERT into usuarios (nombre,apellido,usuario,password,sen_term,temp_max,temp_min,est_act,viento,lluv_ca,presion,humedad,alert_vol,est_aire,dolar,euro,uf,utm,ipc,santoral,l_sismo,mag_sis,feriado,fferiado)
				values ('$nombre','$apellido','$usuario','$password','$sen_term','$temp_max','$temp_min','$est_act','$viento','$lluv_ca','$presion','$humedad','$alert_vol','$est_aire','$dolar','$euro','$uf','$utm','$ipc','$santoral','$l_sismo','$mag_sis','$feriado','$fferiado')";
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