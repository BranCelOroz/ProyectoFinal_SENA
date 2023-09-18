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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/stacktable.js"></script>
<style type="text/css">
  table {
  background-color: white;
  text-align: left;
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 20px;
}

thead {
  background-color: #1293d4;
  border-bottom: solid 5px darkblue;
  color: white;
}
 tr:nth-child(even){
  background-color: #ddd;
 }

 tr:hover td{
  background-color: #084B8A;
  color: white;
 }
 h2{
  text-align: center;
  color: white;
 }
</style>
    <header>
           
             <center><h1  style="font-size: 60px; margin-top: 0;" >SHALOOM<span class="resaltado">GYM</span></h1></center>
              <input type="checkbox" id="check"><label style="font-size: 30px; cursor: pointer;" for="check" class="icon-menu">Menú</label>
            
            
            <nav class="menu">
                <ul>
                
  <li><a href="instru.php"><span class="icon-home1"></span> Inicio</a></li>
             <li><a href="registroinstru.php"><span class="icon-user"></span> mi perfil</a></li>
          <li><?php user_login();
            echo '<a href="../GYM.php?modo=desconectar"><span class="icon-log-out">CERRAR SESIÓN</span></a>'; ?></li>
                </ul>
            </nav>
            </header>
  
<body>
  
   <div class="foterfix"></div>
   <br>
   <br>
<section>
  <h2 class="icon-list1"> Listado Clientes</h2>
<div id="maincontainer1" >
    <table>
<thead>
  <th>Nombres</th>
  <th>Apellidos</th>
  <th>Edad</th>
  <th>Fecha de Nacimiento</th>
  <th>Genero</th>
  <th>Tipo de ID</th>
  <th>Identificación</th>
  <th>Expedición</th>
  <th>Sangre</th>
  <th>Eps</th>
  <th>Correo</th>
  <th>Telefono</th>
  <th>Dirección</th>
</thead>
  <?php 
  $sel=$conexion->query("SELECT nombres,apellidos,edad,nacimiento,genero,tidentificacion,identificacion,expedicion,sangre,eps,correo,telefono,direccion FROM clientes");
  while ($fila=$sel->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $fila['nombres'] ?></td>
    <td><?php echo $fila['apellidos'] ?></td>
    <td><?php echo $fila['edad'] ?></td>
    <td><?php echo $fila['nacimiento'] ?></td>
    <td><?php echo $fila['genero'] ?></td>
    <td><?php echo $fila['tidentificacion'] ?></td>
    <td><?php echo $fila['identificacion'] ?></td>
    <td><?php echo $fila['expedicion'] ?></td>
    <td><?php echo $fila['sangre'] ?></td>
    <td><?php echo $fila['eps'] ?></td>
    <td><?php echo $fila['correo'] ?></td>
    <td><?php echo $fila['telefono'] ?></td>
    <td><?php echo $fila['direccion'] ?></td>
     
  </tr>
  
    <?php } ?>
</table>
  </div>
</section>


<div class="foterfix"></div>

    <footer>
      <div ><p class="copy">Shaloom GYM, Copyright &copy; 2018</p></div>
    </footer>

  </body>
</html>
