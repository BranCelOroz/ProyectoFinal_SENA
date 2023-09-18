<?php include 'conexion2.php' ?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <link rel="shortcut icon" href="img/gymfav.png">
  <title>Shaloom Gym</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/pagprincipal.css">
  <link rel="stylesheet" type="text/css" href="css/styleicon.css">
  <link rel="stylesheet" type="text/css" href="css/menu2.css">
  <link rel="stylesheet" type="text/css" href="css/instru.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/contacto.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style >
	body{background-color: gray;}
  .container-fluid{
 width: 100%;
  max-width:auto;
  margin: 30px auto;
  margin-left:  auto;
  margin-top: 5px;
  height: auto;
  display: flex;
  justify-content: space-between;
  flex-wrap:wrap;
text-align: center;

  }

  table{
  background-color: white;
  text-align: left;
  border-collapse: collapse;
  width: 100%;
  justify-content: center;
  text-align: center;
  margin-left: 20px;
  margin-right: 20px;

}

th, td{
  padding: 20px;
  width: 300PX;
  text-align: center;

}

thead{
  background-color: #1293d4;
  border-bottom: solid 5px darkblue;
  color: white;
  text-align: center;

}

tr:nth-child(even){
  background-color: #ddd;
}

tr:hover td {
  background-color: #084B8A;
  color: white;
}
h2{
  color: white;
  text-align: center;
}



</style>

<body>
      <header>
           
             <center><h1  style="font-size: 60px; margin-top: 0;" >SHALOOM<span class="resaltado">GYM</span></h1></center>
              <input type="checkbox" id="check"><label style="font-size: 30px; cursor: pointer;" for="check" class="icon-menu">Menú</label>
            
            
            <nav class="menu">
                <ul>
                <li><a href="registroinstru.php"><span class="icon-user"></span> mi perfil</a></li>
 <li><a href="cliente.php"><span class="icon-list"></span> clientes</a></li>
 <li><?php user_login();echo '<a href="../GYM.php?modo=desconectar"><span class="icon-log-out">CERRAR SESIÓN</span></a>'; ?></li>
                </ul>
            </nav>
            </header>

<style type="text/css">

  .contenedor ul{
    list-style: none;
    padding-left: 10px;
    animation: cambiar 7s infinite;
    overflow: hidden;
  }
 .contenedor ul,p{
    margin: 0px;
  }
  @keyframes cambiar{
    0%{margin-top: 0px;}
    20%{margin-top: 0px;}
    25%{margin-top: -40px;}
    50%{margin-top: -40px;}
    80%{margin-top: -80px;}
    85%{margin-top:  -40px;}
    95%{margin-top:  -40px;}
    100%{margin-top: 0px;}

  }
</style>

 <section id="cabecera">
      <div class="contenedor" style="display: flex; overflow: hidden; height: 40px; width: 600px; font-size: 40px; line-height: 40px; position: absolute;left: 10px; top: 400px;">
       <P>BIENVENIDO</P>
       <ul>
         <li>INSTRUCTOR</li>
         <li>BRANDON</li>
         <li>CELEITA</li>
       </ul>
      </div>
    </section>
<br>
<h2 class="icon-comment"> Rutinas O Alimentación clientes</h2>

<div class="container-fluid2">
 
  <div class="row">
    <div class="col-md-6" id="maincontainer4">

     <form  class="formreg" action="cargar1.php" method="post" enctype="multipart/form-data" >
         <h2>Ingresar Rutina o PLan Alimentario</h2>
    <input  name="id" id="input" type="number" required class="form-control" placeholder="&#128272;  ID">
          <input  name="nombre" id="input" required class="form-control" placeholder="&#128100;  Nombre">
          <input  name="descripcion" id="input" type="text" required class="form-control" placeholder="&#9993;  Descripción"  >
           <select id="input" style="color: black;" name="archiv">
             <option>Rutinas</option>
             <option>Alimentación</option>
           </select>
           <input type="file" name="archivo">
     


       <center> <input class="btnsubmit" type="submit" value="Enviar"> </center>
    </form>

    </div>
        <div class="col-md-6">
      <div id="maincontainer3" >
        <h3 style="color: white; text-align: center;" class="icon-bookmark1"> RUTINAS</h3> 
 <table>
<thead>

  <th>Nombre</th>
  <th>Descripción</th>
  <th>Archivo</th>
  <th></th>
</thead>
  <?php 

  $datos=$conexion->query("SELECT codigo, id, nombre, descripcion, archivo FROM datos") or die('ha fallado la conexion');
  while ($sel=@mysqli_fetch_row($datos)) {
  ?>
  <tr>

    <td><?php echo $sel[2] ?></td>
    <td><?php echo $sel[3] ?></td>
    <td><?php echo "<a href=' ".$sel[4]."'>descargar</a>"?></td>
    <td><a href="borrar1.php?codigo=<?php echo $sel[0] ?>" ><span id="hii" style="color: black;" class="icon-trashcan"></span></a></td>

  </tr>
  
    <?php } ?>
</table>
<br>  
<br> 
<h3 style="color: white; text-align: center;" class="icon-apple"> PLAN ALIMENTARIO</h3> 
<table>
<thead>

  <th>Nombre</th>
  <th>Descripción</th>
  <th>Archivo</th>
  <th></th>
</thead>
  <?php 

  $data=$conexion->query("SELECT codigo, id, nombre, descripcion, archivo FROM alimentacion") or die('ha fallado la conexion');
  while ($sele=@mysqli_fetch_row($data)) {
  ?>
  <tr>
 
    <td><?php echo $sele[2] ?></td>
    <td><?php echo $sele[3] ?></td>
    <td><?php echo "<a href=' ".$sele[4]."'>descargar</a>"?></td>
    <td><a href="borrar2.php?codigo=<?php echo $sele[0] ?>" ><span id="hii"  style="color: black;" class="icon-trashcan"></span></a></td>

  </tr>
  
    <?php } ?>
</table>

</div>
</div>
</div>
<section>
<div id="maincontainer" >
  <h2 class="icon-clock1"> Horario</h2>

<table>
<thead>
	<th>Lunes</th>
	<th>Martes</th>
	<th>Miercoles</th>
	<th>Jueves</th>
	<th>Viernes</th>
</thead>
	<?php 
	$sel=$conexion->query("SELECT * FROM horarios");
	while ($fila=$sel->fetch_assoc()) {
	?>
	<tr>
		<td><?php echo $fila['Lunes'] ?></td>
		<td><?php echo $fila['Martes'] ?></td>
		<td><?php echo $fila['Miercoles'] ?></td>
		<td><?php echo $fila['Jueves'] ?></td>
	    <td><?php echo $fila['Viernes'] ?></td>
	</tr>
	
    <?php } ?>
</table>
	</div>
</section>

 <h2 class="icon-list"> Inscritos a clases grupales</h2>
<div class="container-fluid">
 
  <div class="row">
    <div class="col-md-6">
      <div id="maincontainer2" >
  <h2 class="icon-chat"> Aerobicos</h2>

<table >
<thead>
  <th>Nombres</th>
  <th>Apellidos</th>
  <th>Email</th>

</thead>
  <?php 
  $sel=$conexion->query("SELECT * FROM aerobicos");
  while ($fila=$sel->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $fila['nombre'] ?></td>
    <td><?php echo $fila['apell'] ?></td>
    <td><?php echo $fila['email'] ?></td>
  </tr>
    <?php } ?>
</table>
  </div>  
    </div>
        <div class="col-md-6">
      <div id="maincontainer2" >
  <h2 class="icon-chat"> Kickboxing</h2>

<table>
<thead>
  <th>Nombres</th>
  <th>Apellidos</th>
  <th>Email</th>

</thead>
  <?php 
  $sel=$conexion->query("SELECT * FROM kickboxing ");
  while ($fila=$sel->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $fila['nombre'] ?></td>
    <td><?php echo $fila['apell'] ?></td>
    <td><?php echo $fila['email'] ?></td>
  </tr>
  
    <?php } ?>
</table>
  </div>
    </div>
  </div>
  <div class="row">
        <div class="col-md-12">
            <div id="maincontainer2" >
  

<table>
  <h2 class="icon-chat"> Zumba</h2>
<thead>
   <th>Nombres</th>
  <th>Apellidos</th>
  <th>Email</th>
</thead>
  <?php 
  $sel=$conexion->query("SELECT * FROM zumba");
  while ($fila=$sel->fetch_assoc()) {
  ?>
  <tr>
  <td><?php echo $fila['nombre'] ?></td>
    <td><?php echo $fila['apell'] ?></td>
    <td><?php echo $fila['email'] ?></td>
  </tr>
  
    <?php } ?>
</table>
  </div>
    </div>
  </div>
</div>
</div>

<div class="foterfix"></div>

    <footer>
      <div ><p class="copy">Shaloom GYM, Copyright &copy; 2018</p></div>
    </footer>
  </body>
</html>
