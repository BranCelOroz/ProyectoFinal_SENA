<?php include 'conexion2.php' ?>
<!DOCTYPE html>
<html lang="es">
<html>
<head>
<link rel="shortcut icon" href="img/gymfav.png">
  <title>Shaloom Gym</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-whith, user-scalable=no, initial-scale-1, maximum-scale=1, minium-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/pagprincipal.css">
  <link rel="stylesheet" type="text/css" href="css/styleicon.css">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
.rutinas{
	background-color: #6E6E6E;
font-style:italic; color: white;  padding-top: 20px;
border-top: 4px solid #1293d4 ;
text-align: center;
padding-bottom: 10px;
}



</style>

<body>
<header>
      <div class="contenedor">
        <div id="marca">
          <center><h1 >SHALOOM<span class="resaltado">GYM</span></h1></center>
        </div>
      </div>  

      <input type="checkbox" id="btn-menu">
      <label for="btn-menu" class="icon-menu"></label>

      <nav class="menu">
        <ul >
          <li><a href="perfilc.php"><span class="icon-home1"></span> Inicio</a>
          </li>
          <li><a href="Perfil.php"><span class="icon-home1"></span> Mi perfil</a>
          </li>
          <li><a href="Clasecliente.php"><span class="icon-calendar1"></span> Clases</a></li>
          <li><?php user_login();
            echo '<a href="GYM.php?modo=desconectar">CERRAR SESION</a>'; ?></li>
          
        </ul>
        
      </nav>
</header>

 <section id="cabecera">
      <div class="contenedor">
        <h1>GIMNASIO SHALOOM</h1>
      </div>
    </section>
  

  <div id="contenedor_carga">
    <div id="carga"></div>
  </div>




<script>
  window.onload = function(){
    var contenedor = document.getElementById('contenedor_carga');

    contenedor.style.visibility = 'hidden';
    contenedor.style.opacity = '0';
  }
</script>

<div class="rutinas"><h3>TUS RUTINAS RECOMENDADAS</h3>
	

</div>




<footer>
  <div class="foot"><p class="copy">Gimnasio Shaloom, Copyright &copy; 2018</p></div>
</footer>
</body>
</html>