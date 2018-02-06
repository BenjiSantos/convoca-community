<?php
//Fetching Values from URL
$nombre_completo=$_POST['nombre_completo'];
$correo=$_POST['correo'];
$monto=$_POST['monto'];
$monto_donacion=$_POST['monto_donacion'];
$medio=$_POST['medio'];
$fecha = date("Y-m-d H:i:s");



$myFile = "donantes.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $nombre_completo.';'.$correo.';'.$monto.';'.$monto_donacion.';'.$medio.';'.$fecha."\n";
//$myfile = file_put_contents('logs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
fwrite($fh, $stringData);
fclose($myfile);
//Insert query

	echo true;

?>



