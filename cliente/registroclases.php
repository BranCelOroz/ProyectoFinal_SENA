<?php include 'conexion2.php';


$nombre=$_POST['nombre'];
$apell=$_POST['apell'];
$email=$_POST['mail'];
$select=$_POST['select'];


	switch ($select) {
		case 'Zumba':
			$ins = $conexion -> query("INSERT INTO zumba(nombre,apell,email) VALUES('$nombre','$apell','$email')");
if ($ins) {
	echo '<script>alert("Has sido regitrado")
	    window.history.go(-1)
	    </script> ';
}
			break;
		
		case 'Kickboxing':
			$ins = $conexion -> query("INSERT INTO kickboxing(nombre,apell,email) VALUES('$nombre','$apell','$email')");
      if ($ins) {
      echo '<script>alert("Has sido regitrado")
 	    window.history.go(-1)
 	    </script> ';
         }
			break;

		case 'Aerobicos':
			$ins = $conexion -> query("INSERT INTO aerobicos(nombre,apell,email) VALUES('$nombre','$apell','$email')");
        if ($ins) {
        echo '<script>alert("Has sido regitrado")
 	    window.history.go(-1)
 	    </script> ';
          }
			break;
		default:
			# code...
			break;
	}
// 	if ($_POST['select']=='zumba') {

// 			else{
// 	echo '<script>alert("No has sido regitrado.")
// 	    window.history.go(-1)
// 	    </script> ';
// }}
// 	elseif ($_POST['select']=='kickboxing') {
		
// 			$ins = $conexion -> query("INSERT INTO kickboxing(nombre,apell,email) VALUES('$nombre','$apell','$email')");
// if ($ins) {
// 	echo '<script>alert("Has sido regitrado")
// 	    window.history.go(-1)
// 	    </script> ';
// }else{
// 	echo '<script>alert("No has sido regitrado.")
// 	    window.history.go(-1)
// 	    </script> ';
// }
// }
// 		elseif ($_POST['select']=='aerobicos') {
		
// 			$ins = $conexion -> query("INSERT INTO aerobicos(nombre,apell,email) VALUES('$nombre','$apell','$email')");
// if ($ins) {
// 	echo '<script>alert("Has sido regitrado")
// 	    window.history.go(-1)
// 	    </script> ';
// }else{
// 	echo '<script>alert("No has sido regitrado.")
// 	    window.history.go(-1)
// 	    </script> ';
// }
// }else{
// 	echo "No pudo realizarse el registro";
// }


?>