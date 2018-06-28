<?php 


	session_start();
	require_once "conexion.php";

	$conexion=conexion();

		$usuario=$_POST['usuario'];
		$pass=sha1($_POST['password']);

		$sql="SELECT * from usuarios where usuario='$usuario' and password='$pass'";
		$result=mysqli_query($conexion,$sql);
		
		if(mysqli_num_rows($result) > 0){
		while($row=$result->fetch_assoc()){
			$nombre = $row["nombre"];
			$_SESSION['nombre'] = $nombre;
			$apellido = $row["apellido"];
			$_SESSION['apellido'] = $apellido;
			$sen_term = $row["sen_term"];
			$_SESSION['sen_term'] = $sen_term;
			$temp_max = $row["temp_max"];
			$_SESSION['temp_max'] = $temp_max;

			$temp_min = $row["temp_min"];
			$_SESSION['temp_min'] = $temp_min;
			$est_act = $row["est_act"];
		    $_SESSION['est_act'] = $est_act;
			$viento = $row["viento"];
			$_SESSION['viento'] = $viento;
			$lluv_ca = $row["lluv_ca"];
			$_SESSION['lluv_ca'] = $lluv_ca;
			$presion = $row["presion"];
			$_SESSION['presion'] = $presion;
			$humedad = $row["humedad"];
			$_SESSION['humedad'] = $humedad;
			$alert_vol = $row["alert_vol"];
			$_SESSION['alert_vol'] = $alert_vol;
			$est_aire = $row["est_aire"];
			$_SESSION['est_aire'] = $est_aire;

			$dolar = $row["dolar"];
			$_SESSION['dolar'] = $dolar;
			$euro = $row["euro"];
			$_SESSION['euro'] = $euro;
			$uf = $row["uf"];
			$_SESSION['uf'] = $uf;
			$utm = $row["utm"];
			$_SESSION['utm'] = $utm;
			$ipc = $row["ipc"];
			$_SESSION['ipc'] = $ipc;

			$santoral = $row["santoral"];
			$_SESSION['santoral'] = $santoral;
			$l_sismo = $row["l_sismo"];
			$_SESSION['l_sismo'] = $l_sismo;
		

			$feriado = $row["feriado"];
			$_SESSION['feriado'] = $feriado;


		 }
		   echo 1;
	    }else{
			echo 0;
		}
		
 ?>