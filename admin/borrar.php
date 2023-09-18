<?php include 'conexion2.php';

$id=$_REQUEST['id'];

$borra=$conexion-> query ("DELETE FROM usuarios WHERE id='$id' ");
if ($borra) {
	echo "<script>
	alert('el registro fue eliminado')
	location.href='registro.php';
	</script>";
}else{
	echo "<script>
	alert('el registro no fue eliminado')
	location.href='registro.php';
	</script>";
}

 ?>