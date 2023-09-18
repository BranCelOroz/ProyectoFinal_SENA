<?php
include 'conexion2.php';

$sel=$_POST['archiv'];
$nombre=$_POST['nombre'];
$desc=$_POST['descripcion'];
$id=$_POST['id']; 
$ruta="../file/";
 opendir($ruta);
$destino=$ruta.$_FILES['archivo']['name'];
copy($_FILES['archivo']['tmp_name'],$destino);

switch ($sel) {
		case 'Rutinas':
	     $sql=$conexion->query("INSERT INTO datos( id, nombre, descripcion, archivo) VALUES ('$id','$nombre','$desc','$destino')");
	      if ($sql) {
	echo '<script>alert("Datos Guardados")
	    window.history.go(-1)
	    </script> ';
}else{
	echo '<script>alert("No Guardo Datos.")
	    window.history.go(-1)
	    </script> ';
}
			break;
		
		case 'Alimentación':
     $sql=$conexion->query("INSERT INTO alimentacion(id, nombre, descripcion, archivo) VALUES ('$id','$nombre','$desc','$destino')") ;
     if ($sql) {
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

	?> 