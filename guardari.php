<?php
include'conexion2.php';

$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$tel=$_POST['telefono'];
$dir=$_POST['mensaje'];

$ins=$conexion ->query("INSERT INTO inscripcion (nombre,correo,telefono,mensaje) VALUES ('$nombre','$correo','$tel','$dir')");
if ($ins) {
	echo '<script>
	    window.history.go(-1)
	    </script> ';
}else{
	echo '<script>
	    window.history.go(-1)
	    </script> ';
}

?>