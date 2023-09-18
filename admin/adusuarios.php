<?php include 'conexion2.php' ?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <link rel="shortcut icon" href="img/gymfav.png">
  <title>Shaloom Gym-ADMINISTRAR USUARIOS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-whith, user-scalable=no, initial-scale-1, maximum-scale=1, minium-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/admin.css">

  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/menu2.css">
  <link rel="stylesheet" type="text/css" href="css/styleicon.css">
</head>
<body>

 <header>
            <center><h1  style="font-size: 60px; margin-top: 0;" >SHALOOM<span class="resaltado">GYM</span></h1></center>
              <input type="checkbox" id="check"><label style="font-size: 30px; cursor: pointer;" for="check" class="icon-menu">Menú</label>
            
            
            <nav class="menu">
                <ul>
        <li><a href="admin.php"><span class="icon-home1"></span> Inicio</a></li>
          <li><a href="adusuarios.php"><span class="icon-user1"></span> Usuarios</a>
          </li>
          <li><a href="registro.php"><span class="icon-add-user"></span> Registro</a></li>
          <li><?php user_login();echo '<a href="../GYM.php?modo=desconectar"><span class="icon-log-out">CERRAR SESIÓN</span></a>'; ?></li>
        </ul>

            </nav>
            </header>

<div class="foterfix"></div>
<!----------------------------------------------------------->

<div id="main_container"> 
  <h1 id="hello" class="icon-list"> CLIENTES</h1>
  <br>
  <table>
    <thead>
    
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Edad</th>
        <th>Nacimiento</th>
        <th>Genero</th>
        <th>Tipo I</th>
        <th>Identificación</th>
        <th>Expedición</th>
        <th>Sangre</th>
        <th>EPS</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Dirección</th>
       
    </thead>
    <?php
    $sel=$conexion->query("SELECT * FROM clientes");
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
      <td><?php echo $fila['correo']?></ td>
      <td><?php echo $fila['telefono'] ?></td>
      <td><?php echo $fila['direccion'] ?></td>
    </tr>
<?php } ?>
  </table>
</div>
<div id="main_container"> 
  <h1 id="hello" class="icon-list">INSTRUCTORES</h1>
  <br>
  <table>
    <thead>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Edad</th>
        <th>Nacimiento</th>
        <th>Genero</th>
        <th>Tipo I</th>
        <th>Identificación</th>
        <th>Expedición</th>
        <th>Sangre</th>
        <th>EPS</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Dirección</th>
       
    </thead>
    <?php
    $sel=$conexion->query("SELECT * FROM instructores");
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
      <td><?php echo $fila['correo']?></ td>
      <td><?php echo $fila['telefono'] ?></td>
      <td><?php echo $fila['direccion'] ?></td>
    </tr>
<?php } ?>
  </table>
</div>
<!--------------------------------------------------------------------------------------------->



<div class="foterfix"></div>

    <footer>
      <div ><p class="copy">Shaloom GYM, Copyright &copy; 2018</p></div>
    </footer>
</body>
</html>