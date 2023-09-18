<?php 
$id=$_REQUEST['id'];

$sel = $conexion -> query("SELECT * FROM usuarios WHERE id='$id' ");
if ($fila=$sel->fetch_assoc()) {
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="update.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id?>">
	<input type="text" name="nick" placeholder="nombre del usuario" value="<?php echo $fila['nick'] ?>"><br>
	<input type="text" name="mail" placeholder="correo" value="<?php echo $fila['mail'] ?>"><br>
	<select name="rol" type='text' placeholder="cargo" value="<?php echo $fila['rol'] ?>" style="background-color:#6E6E6E;"><br>
     <option> Administrador </option>
     <option> Instructor </option>
     <option> Cliente </option>
   </select>

	<input type="submit" value="Actualizar!!" >
</form>


</body>
</html>