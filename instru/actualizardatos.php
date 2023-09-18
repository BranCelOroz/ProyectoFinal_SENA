
<?php 
$id=$_REQUEST['id'];

$sel = $conexion -> query("SELECT * FROM instructores WHERE id='$id'");
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
      <h2>Datos <span>Personales</span></h2>
    </div>    
<form  class="formreg" action="updatedatos.php" method="post">
	<input type="hidden" name="id" value="<?php echo $id?>">
          <input  name="name" id="input" type="" required class="form-control"  disabled="" value="<?php echo $fila['nombres'] ?>">
          <input  name="apell" id="input" type="text" required class="form-control" disabled="" value="<?php echo $fila['apellidos'] ?>">
         <input  name="fena" id="input" type="text" required class="form-control" disabled="" value="<?php echo $fila['nacimiento'] ?>">
         <input  name="genero" id="input" type="text" required class="form-control" disabled="" value="<?php echo $fila['genero'] ?>">
          <input  name="tid" id="input" type="text" required class="form-control"  disabled="" value="<?php echo $fila['tidentificacion'] ?>" >
          <input  name="nid" id="input" type="text" required class="form-control"  disabled="" value="<?php echo $fila['identificacion'] ?>" >
          <input  name="lugarid" id="input" type="text" required class="form-control"  disabled="" value="<?php echo $fila['expedicion'] ?>">  
           <input  name="sangre" id="input" type="text" required class="form-control"  disabled="" value="<?php echo $fila['sangre'] ?>">
          <input  name="eps" id="input" type="text" required class="form-control"  value="<?php echo $fila['eps'] ?>">
           <input  name="correo" id="input" type="email" required class="form-control" placeholder="&#9993;  Email"   value="<?php echo $fila['correo'] ?>" >
          <input  name="telefono" id="input" type="text" required class="form-control" placeholder="&#128222;  Telefono" value="<?php echo $fila['telefono'] ?>">
          <input  name="direccion" id="input" type="text" required class="form-control"  placeholder="&#8962;  Dirección" value="<?php echo $fila['direccion'] ?>" >


       <center> <input class="btnsubmit" type="submit" value="MODIFICAR DATOS"> </center>
    </form>
  </div>
    </form>



</body>
</html>