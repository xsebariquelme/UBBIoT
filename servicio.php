

<?php 

$mysqli = new mysqli('localhost','cde40132_seba','Chillan123','cde40132_iot');
$query = "SELECT * FROM santoral WHERE id=1";
$result = $mysqli->query($query);
$row = $result->fetch_array(MYSQLI_NUM);

$ayer = $row[1];
$hoy = $row[2];
$manana = $row[3];




$query2 = "SELECT * FROM datos_meteorologicos WHERE id=1";
$result2 = $mysqli->query($query2);
$row2 = $result2->fetch_array(MYSQLI_NUM);
$estado_actual = $row2[1];
$temperatura_minima = $row2[2];
$temperatura_maxima = $row2[3];
$velocidad_viento = $row2[4];
$cantidad_lluvia = $row2[5];
$humedad = $row2[6];
$presion = $row2[7];
$estado_aire = $row2[8];
$temperatura_actual = $row2[9];
$estado_volcan = $row2[10];



$query3 = "SELECT * FROM economicos WHERE id=1";
$result3 = $mysqli->query($query3);
$row3 = $result3->fetch_array(MYSQLI_NUM);
$dolar = $row3[1];
$euro = $row3[2];
$uf = $row3[3];
$utm = $row3[4];
$ipc = $row3[5];



$query4 = "SELECT * FROM feriados WHERE id=1";
$result4 = $mysqli->query($query4);
$row4 = $result4->fetch_array(MYSQLI_NUM);
$fecha = $row4[1];
$titulo = $row4[2];




$servicio []= array("datos_meteorologicos"=>array('sensacion_termica'=>$temperatura_actual,'temperatura_maxima'=>$temperatura_maxima,'temperatura_minima'=>$temperatura_minima,'estado_actual'=>$estado_actual,'velocidad_viento'=>$velocidad_viento,'lluvia_caida'=>$cantidad_lluvia,'presion'=>$presion,'humedad'=>$humedad,'alerta_volcan'=>$estado_volcan,'estado_aire'=>$estado_aire),"santoral"=>array('ayer'=>$ayer,'hoy'=>$hoy, 'manana'=>$manana),"datos_economicos"=>array('dolar'=>$dolar,'euro'=>$euro,'uf'=>$uf,'utm'=>$utm,'ipc'=>$ipc),"feriado_cercano"=>array('feriado'=>$titulo,'fecha'=>$fecha));

echo json_encode($servicio);


?>