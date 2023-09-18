<?php include 'conexion2.php';

$cod=$_REQUEST['codigo'];

$del=$conexion->query("DELETE FROM pagos WHERE codigo='$cod' ");
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