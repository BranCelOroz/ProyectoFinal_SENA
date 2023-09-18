<?php include 'conexion2.php';

$cod=$_REQUEST['codigo'];

$del = $conexion -> query("DELETE FROM datos WHERE codigo='$cod' ");
if ($del) {
	echo "<script>
	alert('el registro fue eliminado')
	window.history.go(-1)
	</script>";
}else{
	echo "<script>
	alert('el registro no fue eliminado')
	window.history.go(-1)
	</script>";
}

 ?>