<?php include 'conexion2.php';

$id=$_POST['id'];
$correo=$_POST['correo'];
$tel=$_POST['telefono'];
$dir=$_POST['direccion'];

$update = $conexion -> query("UPDATE instructores SET correo='$correo',telefono='$tel',direccion='$dir' WHERE id='$id' ");
if ($update) {
	echo '<script>alert("Datos Guardados")
	    window.history.go(-1)
	    </script> ';
}else{
	echo '<script>alert("No Guardo Datos.")
	    window.history.go(-1)
	    </script> ';
}

?>
