<?php include 'conexion2.php';

$nom=$_REQUEST['nombre'];

$del=$conexion->query("DELETE FROM inscripcion WHERE nombre='$nom' ");
if ($del) {
	echo "<script>
	alert('el registro fue eliminado')
	location.href='admin.php';
	</script>";
}else{
	echo "<script>
	alert('el registro no fue eliminado')
	location.href='admin.php';
	</script>";
}

 ?>