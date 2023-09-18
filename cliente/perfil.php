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
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/cliente.css">
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
  text-align: center;
}
 .resaltado span{
color: #1293d4;
font: 15px Arial, Helvetica,sans-serif;
}
.perfilimg {
  width: 25rem;
  border-radius: 50%;

}

</style>
<body>

    <header>
           
             <center><h1  style="font-size: 60px; margin-top: 0;" >SHALOOM<span class="resaltado">GYM</span></h1></center>
              <input type="checkbox" id="check"><label style="font-size: 30px; cursor: pointer;" for="check" class="icon-menu">Menú</label>
            
            
            <nav class="menu">
                <ul>
                <li><a href="perfilc.php"><span class="icon-home1"></span> Inicio</a>
          </li>
          <li><a href="Clasecliente.php"><span class="icon-calendar1"></span> Clases</a>
          </li>
          <li><?php user_login();
            echo '<a href="../GYM.php?modo=desconectar"><span class="icon-log-out">CERRAR SESIÓN</span></a>'; ?></li>
          
                </ul>
            </nav>
            </header>
<div class="foterfix"></div>

<div class="container-fluid">

<div class="row">
  <div class="col-md-6">
     <div class="perfilcontainer">
    <div class="perfiltop">
     <center> <img class="perfilimg" src="img/elcliente.png" alt=""></center>
      <h2 class="perfiltitle">Shaloom <span>Gym</span></h2>
      <center><p>Cliente.</p></center>
    </div>
   </div>
</div>
</div>




<!--------------------------------------------------------------------------------------------->
  <div class="col-md-6">
<?php
    $sel=$conexion->query("SELECT id FROM clientes WHERE id='3'" );
    while ($fila=$sel->fetch_assoc()) {
    ?>
    <center><button class="boton"><a href="perfil.php?id=<?php echo $fila['id'] ?>" >Modifica tus Datos.</a></button></center>  
<?php } ?>
<?php 
  if (isset($_GET['id'])){
    include("actualizarc.php");
  }
 ?>
</div>
</div>
</div>





<div class="foterfix"></div>
   <footer>
      <div><p class="copy">Shaloom GYM, Copyright &copy; 2018</p></div>
    </footer>
</body>
</html>