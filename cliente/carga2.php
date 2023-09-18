<?php
include 'conexion2.php';


$nombre=$_POST['name'];
$pago=$_POST['pagomes'];
 
$ruta="../file/";
 opendir($ruta);
$destino=$ruta.$_FILES['archivo']['name'];
copy($_FILES['archivo']['tmp_name'],$destino);

 $sql=$conexion->query("INSERT INTO pagos(nombre,mes,archivo) VALUES ('$nombre','$pago','$destino')");
	      if ($sql) {
	echo '<script>alert("Datos Guardados")
	    window.history.go(-1)
	    </script> ';
}else{
	echo '<script>alert("No Guardo Datos.")
	    window.history.go(-1)
	    </script> ';
}
			
	?> 