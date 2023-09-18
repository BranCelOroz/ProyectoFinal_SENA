<?php include 'conexion2.php';

$id=$_POST['id'];
$nick=$_POST['nick'];
$mail=$_POST['mail'];
$rol=$_POST['rol'];

$update = $conexion -> query("UPDATE usuarios SET nick='$nick', mail ='$mail', rol='$rol' WHERE id='$id' ");
if ($update) {
	echo "<script>
	location.href='registro.php';
	</script>";
}else{
	echo "<script>
	location.href='actualizar.php?id=".$id."';
	</script>";
}

 ?>
