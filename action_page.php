<?php


//var_dump($_GET);
echo "su nombre es " .$_GET['nombre'];

//$archivo=fopen('usuarios.txt', 'a');

$MiObjeto= new stdClass();
$MiObjeto->nombre=$_GET['nombre'];
$MiObjeto->apellido=$_GET['apellido'];

var_dump($_GET);
var_dump(json_encode($MiObjeto));
$archivo=fopen('usuarios.txt', 'a');
fwrite($archivo, $_GET['nombre']."\n");
var_dump(json_encode($MiObjeto));
fclose($archivo);
 

?>