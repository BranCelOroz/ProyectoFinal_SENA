<?php
include'conexion2.php';

$nombre=$_POST['name'];
$apellido=$_POST['apell'];
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
$select=$_POST['usuarios'];

switch ($select) {
		case 'Instructor':
	$ins=$conexion ->query("INSERT INTO instructores (nombres,apellidos,edad,nacimiento,genero,tidentificacion,identificacion,expedicion,sangre,eps,correo,telefono,direccion) VALUES ('$nombre','$apellido','','$nacimiento','$genero','$tid','$id','$lugarid','$sangre','$eps','$correo','$tel','$dir')");
if ($ins) {
	echo '<script>alert("Datos Guardados")
	    window.history.go(-1)
	    </script> ';
}else{
	echo '<script>alert("No Guardo Datos.")
	    window.history.go(-1)
	    </script> ';
}
			break;
		
		case 'Cliente':
	$ins=$conexion ->query("INSERT INTO clientes (nombres,apellidos,edad,nacimiento,genero,tidentificacion,identificacion,expedicion,sangre,eps,correo,telefono,direccion) VALUES ('$nombre','$apellido','','$nacimiento','$genero','$tid','$id','$lugarid','$sangre','$eps','$correo','$tel','$dir')");
if ($ins) {
	echo '<script>alert("Datos Guardados")
	    window.history.go(-1)
	    </script> ';
}else{
	echo '<script>alert("No Guardo Datos.")
	    window.history.go(-1)
	    </script> ';
}
			break;

		default:
			# code...
			break;
	}

