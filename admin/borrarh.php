
<?php
$id=$_REQUEST['id'];



$sel = $conexion -> query("SELECT * FROM horarios WHERE id='$id'");
if ($fila=$sel->fetch_assoc()) {
}
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<div class="container">
      <div class="formtop">
      <h2>Horarios <span>Instructores</span></h2>
    </div>    
<form class="formreg" action="guardarinstru.php" method="POST">
<input type="hidden" name="id" value="<?php echo $id?>">
<input  name="lunes" class="input" type="text" required="autofocus" placeholder="&#x1F55D;  lunes." value="<?php echo $fila['Lunes'] ?>" >
<input  name="martes" class="input" type="text" required="autofocus" placeholder="&#x1F55D;  Martes." value="<?php echo $fila['Martes'] ?>">
<input  name="miercoles" class="input" type="text" required="autofocus" placeholder="&#x1F55D;  Miercoles." value="<?php echo $fila['Miercoles'] ?>">
<input  name="jueves" class="input" type="text" required="autofocus" placeholder="&#x1F55D;  Jueves." value="<?php echo $fila['Jueves'] ?>" >
<input  name="viernes" class="input" type="text" required="autofocus" placeholder="&#x1F55D;  Viernes" value="<?php echo $fila['Viernes'] ?>">
 <center> <input class="btnsubmit" type="submit" value="Guardar Horario."> </center>
    </form>
  </div>
 </div>


</body>
</html>