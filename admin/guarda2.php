<?php
include'conexion2.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apell'];
$edad=$_POST['edad'];
$nacimiento=$_POST['fena'];
$genero=$_POST['genero'];
$tid=$_POST['tid'];
$id=$_POST['nid'];
$lugarid=$_POST['lugarid'];
$sangre=$_POST['sangre'];
$eps=$_POST['eps'];
$correo=$_POST['correo'];
$tel=$_POST['telefono'];
$dir=$_POST['direccion'];

$ok=$conexion ->query("INSERT INTO clientes (nombres,apellidos,edad,nacimiento,genero,tidentificacion,identificacion,expedicion,sangre,eps,correo,telefono,direccion) VALUES ('$nombre','$apellido','$edad','$nacimiento','$genero','$tid','$id','$lugarid','$sangre','$eps','$correo','$tel','$dir')");
if ($ok) {
	echo '<script>alert("Datos Guardados")
	    window.history.go(-1)
	    </script> ';
}else{
	echo '<script>alert("No Guardo Datos.")
	    window.history.go(-1)
	    </script> ';
}

?>