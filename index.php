

<?php
datosVolcan();
datosJSON();
datosAerodromo();
estadoAire();
estadoClima();

function datosVolcan()
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


function datosJSON()
{
$json = file_get_contents('http://indicadoresdeldia.cl/webservice/indicadores.json');
$obj = json_decode($json);
echo "\n";
echo 'Santoral de hoy: '.$obj->santoral->hoy;
echo ' Dolar de hoy: '.$obj->moneda->dolar;
}


function datosAerodromo()
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
	echo strip_tags(substr($list[0], 0, strpos($list[0], 'Temperaturas')));
else 
    print "Not found"; 
}

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
$regex = '/<h3 class="panel-title"> (.*) <small>/s';
if ( preg_match($regex, $page, $list) )
    echo strip_tags(substr($list[0], 0, strpos($list[0], '(')));
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

<audio src="http://deltacode.cl/iot/eltiempo.ogg" autoplay="true" controls preload="auto" autobuffer></audio>

    <style>
    audio {
    display:none;
    }   
    </style>