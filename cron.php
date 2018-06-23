
<?php
	function conexion()
	{
		return $conexion=mysqli_connect('localhost','cde40132_seba','Chillan123','cde40132_iot');
    }
    
$conexion=conexion();

/*UPDATE MONEDA*/
$json = file_get_contents('https://api.sbif.cl/api-sbifv3/recursos_api/dolar?apikey=88a1ee894461c2137af4b252ce6bdd30c91a2294&formato=json');
$dolar = json_decode($json);

$jsoneuro = file_get_contents('https://api.sbif.cl/api-sbifv3/recursos_api/euro?apikey=88a1ee894461c2137af4b252ce6bdd30c91a2294&formato=json');
$euro = json_decode($jsoneuro);

$jsonipc = file_get_contents('https://api.sbif.cl/api-sbifv3/recursos_api/ipc?apikey=88a1ee894461c2137af4b252ce6bdd30c91a2294&formato=json');
$ipc = json_decode($jsonipc);

$jsonutm = file_get_contents('https://api.sbif.cl/api-sbifv3/recursos_api/utm?apikey=88a1ee894461c2137af4b252ce6bdd30c91a2294&formato=json');
$utm = json_decode($jsonutm);

$jsonuf = file_get_contents('https://api.sbif.cl/api-sbifv3/recursos_api/uf?apikey=88a1ee894461c2137af4b252ce6bdd30c91a2294&formato=json');
$uf = json_decode($jsonuf);

$precioDolar = $dolar->Dolares[0]->Valor;
$precioEuro = $euro->Euros[0]->Valor;
$precioUF = $uf->UFs[0]->Valor;
$precioUTM = $utm->UTMs[0]->Valor;
$precioIPC = $ipc->IPCs[0]->Valor;

$sql="UPDATE economicos SET dolar='$precioDolar',euro='$precioEuro',uf='$precioUF',utm='$precioUTM',ipc='$precioIPC' WHERE id =1";
$result=mysqli_query($conexion,$sql);


/*UPDATE SANTORAL*/
$jsonSantoral = file_get_contents('http://indicadoresdeldia.cl/webservice/indicadores.json');
$obj = json_decode($jsonSantoral);
$ayer = $obj->santoral->ayer;
$hoy = $obj->santoral->hoy;
$manana = $obj->santoral->maniana;
$sqlSantoral="UPDATE santoral SET ayer='$ayer',hoy='$hoy',manana='$manana' WHERE id =1";
$result=mysqli_query($conexion,$sqlSantoral);

/*UPDATE METEOROLOGICOS */

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
    return strip_tags(substr($list[0], 0, strpos($list[0], ' <small>')));
else 
    print "Not found"; 
}



function tempActual()
{
$curl = curl_init('http://www.foreca.es/Chile/Región-del-Biobío/Chillán');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$page = curl_exec($curl);

if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}

curl_close($curl);
$regex = '/Sensación&nbsp;térmica(.*) /s';
if ( preg_match($regex, $page, $list) ){
$esto = strip_tags(substr($list[0], 0, strpos($list[0], '&deg;')));
    return substr($esto, strpos($esto,'rmica')+strlen('rmica'));

}else {
    print "Not found"; 
}
}

function estadoVolcan()
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
if ( preg_match($regex, $page, $listaVolcan) ){
   $str = substr($listaVolcan[0], 0, strpos($listaVolcan[0], '</span>'));
   preg_match_all('/<img(.*?)alt=\"(.*?)\"(.*?)>/si', $str, $out, PREG_SET_ORDER);
   $alt = array();

foreach($out as $val) {
  $alt[] =  $val[2];
}
return $alt[0];

}else{ 
    print "Not found"; 
}

}

$jsonMeteorologico = file_get_contents('http://api.meteored.cl/index.php?api_lang=cl&localidad=18264&affiliate_id=58lcpmkeor69&v=3.0');
$obj = json_decode($jsonMeteorologico);
$temperatura_actual = tempActual();
$estado_Volcan = estadoVolcan();
$estado_actual = $obj->day[0]->symbol_description;
$temperatura_minima = $obj->day[0]->tempmin;
$temperatura_maxima = $obj->day[0]->tempmax;
$velocidad_viento  = $obj->day[0]->wind->speed;
$cantidad_lluvia = $obj->day[0]->rain;
$humedad = $obj->day[0]->humidity;
$presion = $obj->day[0]->pressure;
$estado_aire = estadoAire();
$sqlMeteorologia="UPDATE datos_meteorologicos SET estado_actual='$estado_actual', temperatura_minima = '$temperatura_minima', temperatura_maxima = '$temperatura_maxima', velocidad_viento = '$velocidad_viento', cantidad_lluvia = '$cantidad_lluvia', humedad = '$humedad', presion = '$presion', estado_aire = '$estado_aire', temperatura_actual = '$temperatura_actual', estado_volcan = '$estado_Volcan' WHERE id =1";
$result=mysqli_query($conexion,$sqlMeteorologia);
?>