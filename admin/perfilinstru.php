<?php include 'conexion2.php' ?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <link rel="shortcut icon" href="img/gymfav.png">
  <title>Shaloom Gym-registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-whith, user-scalable=no, initial-scale-1, maximum-scale=1, minium-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/pagprincipal.css">
  <link rel="stylesheet" type="text/css" href="css/styleicon.css">
  <link rel="stylesheet" type="text/css" href="css/menu2.css">
  <link rel="stylesheet" type="text/css" href="css/instru.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
</head>
<style type="text/css">
.container {
  max-width: 450px;
  width: 1500px;
  height: auto;
  margin-top: 15px;
  background-color: #EFEFEF;
  margin: 5% auto;
  padding-bottom: 1rem;
  

}
     .perfilcontainer {

  background-color: #EFEFEF;
  width: 300px;
  border-top: solid .5rem #24282b;
  padding: 3rem 0;
  box-shadow: 0 0 .5rem #24282b;
margin-top: 0px;
margin-right: 180px;
    margin-left: -200px;
  margin-bottom: 50px;  
  justify-content: left;
  z-index: -2000;
  
}
.perfiltop {
  display: block;
  flex-direction: column;
  padding: 10px;
}
.perfiltitle {
  color: black;
}
 .resaltado span{
color: #1293d4;
font: 15px Arial, Helvetica,sans-serif;
}
.perfilimg {
  width: 25rem;
  border-radius: 50%;

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
  
<body>

  <div class="foterfix"></div>



<div class="container-fluid">

<div class="row">
  <div class="col-md-6">
     <div class="perfilcontainer">
    <div class="perfiltop">
     <center> <img class="perfilimg" src="img/elcliente.png" alt=""></center>
      <h2 class="perfiltitle">Shaloom <span>Gym</span></h2>
      <center><p>Instructor.</p></center>
    </div>
   </div>
</div>
</div>




<!--------------------------------------------------------------------------------------------->
  <div class="col-md-6">
<div class="container">
    <div class="formtop">
      <h2>Datos <span>Personales</span></h2>
    </div>   
  <?php 
    $sel = $conexion -> query("SELECT * FROM instructores ");
if ($fila=$sel->fetch_assoc()) {
   ?> 
<form  class="formreg" action="updatedatos.php" method="post">
          <input  name="name" id="input" type="text" required class="form-control"  disabled="" value="<?php echo $fila['nombres'] ?>">
          <input  name="apell" id="input" type="text" required class="form-control" disabled="" value="<?php echo $fila['apellidos'] ?>">
          <input  name="edad" id="input" type="number" required class="form-control" disabled="" value="<?php echo $fila['edad'] ?>" >
         <input  name="fena" id="input" type="text" required class="form-control" disabled="" value="<?php echo $fila['nacimiento'] ?>">
         <input  name="genero" id="input" type="text" required class="form-control" disabled="" value="<?php echo $fila['genero'] ?>">
          <input  name="tid" id="input" type="text" required class="form-control"  disabled="" value="<?php echo $fila['tidentificacion'] ?>" >
          <input  name="nid" id="input" type="text" required class="form-control"  disabled="" value="<?php echo $fila['identificacion'] ?>" >
          <input  name="lugarid" id="input" type="text" required class="form-control"  disabled="" value="<?php echo $fila['expedicion'] ?>">  
           <input  name="sangre" id="input" type="text" required class="form-control"  disabled="" value="<?php echo $fila['sangre'] ?>">
          <input  name="eps" id="input" type="text" required class="form-control"  value="<?php echo $fila['eps'] ?>">
           <input  name="correo" id="input" type="email" required class="form-control" disabled="" placeholder="&#9993;  Email"   value="<?php echo $fila['correo'] ?>" >
          <input  name="telefono" id="input" type="text" required class="form-control" disabled="" placeholder="&#128222;  Telefono" value="<?php echo $fila['telefono'] ?>">
          <input  name="direccion" id="input" type="text" required class="form-control" disabled="" placeholder="&#8962;  Dirección" value="<?php echo $fila['direccion'] ?>" >

    </form>
  </div>
    </form>
<?php }?>
</div>
</div>
</div>

<section>
<div id="maincontainer" >
  <h2 class="icon-camera"> Horario</h2>

<table>
<thead>
  <th>Lunes</th>
  <th>Martes</th>
  <th>Miercoles</th>
  <th>Jueves</th>
  <th>Viernes</th>
  <th></th>
 
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
    <td><a href="perfilinstru.php?id=<?php echo $fila['id'] ?>" ><span id="hii" class="icon-pencil1"></span></a></td>
  </tr>
    <?php } ?>
</table>
  </div>
</section>
  
<?php 
  if (isset($_GET['id'])){
    include("borrarh.php");
  }
 ?>



<div class="foterfix"></div>
   <footer>
      <div><p class="copy">Shaloom GYM, Copyright &copy; 2018</p></div>
    </footer>

</body>
</html>
