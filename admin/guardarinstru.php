<?php
include'conexion2.php';

$id=$_POST['id'];
$lun=$_POST['lunes'];
$mar=$_POST['martes'];
$mier=$_POST['miercoles'];
$jue=$_POST['jueves'];
$vier=$_POST['viernes'];


$update = $conexion -> query("UPDATE horarios SET Lunes='$lun',Martes='$mar',Miercoles='$mier',Jueves='$jue',Viernes='$vier' WHERE id='$id' ");
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
