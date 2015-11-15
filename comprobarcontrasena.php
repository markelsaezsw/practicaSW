<?php
require_once('lib/nusoap.php');
require_once('lib/class.wsdlcache.php');

$ns="http://markelsaezsw.esy.es/SistemasWeb";
$server = new soap_server;
$server->configureWSDL('comprobarcontrasena',$ns);
$server->wsdl->schemaTargetNamespace=$ns;
$server->register('comprobarcontrasena',
array('x'=>'xsd:string'), array('return'=>'xsd:string'), $ns);


function comprobarcontrasena($x){

$handle = fopen("toppasswords.txt", "r");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        if(trim($line) == $x) {
			return "INVALIDA";	
			fclose($handle);
			die();
		}
    }
	return "VALIDA";
    fclose($handle);
} else {
    die("Error al abrir el fichero");
} 
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? 
$HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>	