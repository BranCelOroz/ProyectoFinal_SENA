<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="contenedor_carga">
	<div id="carga"></div>
</div>


<div></div>
<div></div>





<?php 
$rol=$_REQUEST['rol'];
$id=$_REQUEST['id'];

switch ($rol) {
	case 'Administrador':
		echo '<meta http-equiv="Refresh" content="2;url=admin.php?rol='.$rol.'&id='.$id.'"> ';
		
	break;
	case 'Instructor':
		echo '<meta http-equiv="Refresh" content="2;url=instru.php?rol='.$rol.'"> ';
		echo "Iniciando sesion de instructor";
	break;
	case 'Cliente':
		echo '<meta http-equiv="Refresh" content="2;url=perfilc.php?rol='.$rol.'"> ';
		echo "Iniciando sesion de cliente";
		break;
	
	default:
		echo "No se puede iniciar sesion";

		break;
} 
?> 
</body>
</html>










