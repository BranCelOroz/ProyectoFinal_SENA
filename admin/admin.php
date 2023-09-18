


<?php include 'conexion2.php' ?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <link rel="shortcut icon" href="img/gymfav.png">
  <title>Shaloom Gym-Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-whith, user-scalable=no, initial-scale-1, maximum-scale=1, minium-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/pagprincipal.css">
  <link rel="stylesheet" type="text/css" href="css/styleicon.css">
  <link rel="stylesheet" type="text/css" href="css/menu2.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
   .container-fluid{
 width: 100%;
  max-width:auto;
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
</style>
<body>
    <header>
           
             <center><h1  style="font-size: 60px; margin-top: 0;" >SHALOOM<span class="resaltado">GYM</span></h1></center>
              <input type="checkbox" id="check"><label style="font-size: 30px; cursor: pointer;" for="check" class="icon-menu">Menú</label>
            
            
            <nav class="menu">
                <ul>
                <li><a href="adusuarios.php"><span class="icon-user1"></span> Usuarios</a>
          </li>
          <li><a href="registro.php"><span class="icon-add-user"></span> Registro</a></li>
          <li><?php user_login();
            echo '<a href="../GYM.php?modo=desconectar"><span class="icon-log-out">CERRAR SESIÓN</span></a>'; ?></li>
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
         <li>ADMINISTRADOR</li>
         <li>HAROLD</li>
         <li>VELANDIA</li>
       </ul>
      </div>
    </section>


  
<br>  
<br>

<div class="container-fluid">
  <div class="row">
    <div  class="col-md-6">
      <h2  style="color: #fff;text-align: center;" class="icon-add-user"> REGISTRO USUARIOS</h2   >
      <br>  
<center> 
        <div class="contiene">
    <div class="formtop">
      <h2>Datos <span>Basicos </span>usuarios</h2>
    </div>    
<form class="formreg" action="guardar2.php" method="POST">
<input  name="name" class="input" type="text" required="autofocus" placeholder="&#128100;  Nombres" >
<input  name="apell" class="input" type="text" required="autofocus" placeholder="&#128100;  Apellidos" >
<input  name="fena" class="input" type="date" required="autofocus" placeholder="&#9993;  Fecha de nacimiento" >
<select name="genero" class="input" required="autofocus" > 
<option>Masculino</option> 
<option>Femenino</option>
</select>
<select name="tid" class="input" required="autofocus" > 
<option>Cédula</option> 
<option>Tarjeta de identidad</option>
</select>
<input  name="nid" class="input" type="text" required="autofocus" placeholder="&#128100;  Nº Identificación" >
<input  name="lugarid" class="input" type="text" required="autofocus" placeholder=":&#x1F6A9;  Lugar de Expedición" >  
<input  name="sangre" class="input" type="text" required="autofocus" placeholder="&#x1F489;  Tipo de sangre" >
<input  name="eps" class="input" type="text" required="autofocus"  placeholder="&#x1F3E5;  EPS" >
<input  name="correo" class="input" type="email"required="autofocus" placeholder="&#9993;  Email" >
<input  name="telefono" class="input" type="text" required="autofocus" placeholder="&#128222;  Telefono">
<input  name="direccion" class="input" type="text" required="autofocus" placeholder="&#8962;  Dirección" >
<select class="input" name="usuarios" required="autofocus">  
  <option >Instructor</option>
  <option>Cliente</option>
</select>
       <center> <input class="btnsubmit" type="submit" value="REGISTRAR"> </center>
    </form>
  </div>
    </div>
  </center>
    <div class="col-md-6"> 
      <div id="maincontainer3" >
        <h2 style="color: white; text-align: center;" class="icon-credit"> PAGOS CLIENTES</h2> 
 <br> 
 <table>
<thead>
  <th>Nombre</th>
  <th>Mes de pago</th>
  <th>Archivo</th>
  <th>  </th>
</thead>
  <?php 

  $datos=$conexion->query("SELECT codigo,nombre, mes, archivo FROM pagos") or die('ha fallado la conexion');
  while ($sel=@mysqli_fetch_row($datos)) {
  ?>
  <tr>

    <td><?php echo $sel[1] ?></td>
    <td><?php echo $sel[2] ?></td>
    <td><?php echo "<a href=' ".$sel[3]."'>descargar</a>"?></td>
    <td><a href="borrarpago.php?codigo=<?php echo $sel[0] ?>" ><span id="hii" style="color: black;" class="icon-trashcan"></span></a></td>

  </tr>
  
    <?php } ?>
</table>
<br>  
<br>  
 <h2 style="color: white; text-align: center;" class="icon-chat"> Mensajes P.Q.R</h2>
<br>  
<table>
<thead>
  <th>Nombre</th>
  <th>Correo</th>
  <th>Telefono</th>
  <th>Mensaje</th>
  <th>  </th>
</thead>
  <?php 
  $sel=$conexion->query("SELECT * FROM inscripcion ");
  while ($fila=$sel->fetch_assoc()) {
  ?>
  <tr>
    <td><?php echo $fila['nombre'] ?></td>
    <td><?php echo $fila['correo'] ?></td>
    <td><?php echo $fila['telefono'] ?></td>
    <td><?php echo $fila['mensaje'] ?></td>
     <td><a href="borrarsms.php?nombre=<?php echo $fila['nombre'] ?>" ><span id="hii" style="color: black;" class="icon-trashcan"></span></a></td>
  </tr>
  
    <?php } ?>
</table>
</div>
    </div>
  </div>
</div>    

<br>  
    

<div id="Nosotros" class="container-fluid">

<div class="container" id="">

  <div class="row" id="nosotros">

    <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInUp text-center margenPerfil">
      

      <div class="letras">
      <span class="icon-user1"> INSTRUCTORES</span>
      </div>
      

    </div>
  </div>
<br>
<div class="containernosotros">

 
<div class="box">
   <img id="in1" src="img/Captura.JPG" height="250px;">
  <div class="power">
    
    <h3>Brandon Celeita</h3>
    ENTRENADOR
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor.</p><a href="perfilinstru.php">PERFIL</a>
  </div>
 
</div>
  <div class="box">
    
   <img src="img/jessica.JPG" height="250px;">
  <div class="power">
    <h3>Jessica Florez</h3>
    ENTRENADORA
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor.</p><a href="perfilinstru.php">PERFIL</a>
  </div>
 
</div>
<div class="box">
   <img src="img/gyyym.JPG" height="250px;">
  <div class="power">
    
    <h3>Michael Guitierrez</h3>
    ENTRENADOR
   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor.</p><a href="perfilinstru.php">PERFIL</a>
  </div>
 
</div>
</div>
</div>
</div>


<script>
  window.onload = function(){
    var contenedor = document.getElementById('contenedor_carga');

    contenedor.style.visibility = 'hidden';
    contenedor.style.opacity = '0';
  }
</script>


  
<div class="foterfix"></div>

    <footer>
      <div ><p class="copy">Shaloom GYM, Copyright &copy; 2018</p></div>
    </footer>
</body>
</html>