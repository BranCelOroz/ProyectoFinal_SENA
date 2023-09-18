<?php include 'conexion2.php' ?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <link rel="shortcut icon" href="img/gymfav.png">
  <title>Shaloom Gym</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-whith, user-scalable=no, initial-scale-1, maximum-scale=1, minium-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/sesion.css">
  <link rel="stylesheet" type="text/css" href="css/styleicon.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="js/formulario.js"></script>

  </head>
  <style type="text/css">
    .icon-home1{
      margin-left: 100px;
      font-size: 35px;
    }

  </style>
  <body>
<video src="gimnasio.mp4" autoplay="autoplay" loop  ></video>

     <header>
      <div class="contenedor">
        <div id="marca">
        <center><h1 style="font-size: 60px;">SHALOOM<span  class="resaltado">GYM</span><a href="GYM.php"><span class="icon-home1"></span></a></h1></center>
        
        </div>
      </div>  
    </header>
    
<div class="contenedor-formulario">
  <form name="login_user" class="formulario"  method="POST"  action="">
  <center> <div>
   <?php

if(isset($_POST['login']))
{
    /*Validamos que todos los campos esten llenos correctamente*/
    if(($_POST['nick'] != '') && ($_POST['pass'] != '')  )
    {
    
    
    $nick= $_POST['nick'];
    $pass= md5(md5($_POST['pass']));
    $b_user=$conexion ->query("SELECT * FROM usuarios WHERE nick='$nick'");  
    $ses = @mysqli_fetch_assoc($b_user) ;
    if(@mysqli_num_rows($b_user))
    {
        if($ses['pass'] == $pass)
        {   
            $_SESSION['id']=        $ses["id"];
            $_SESSION['fecha']= $ses["fecha"];
            $_SESSION['nick']=  $ses["nick"];
            $_SESSION['mail']=  $ses["mail"];
            $_SESSION['ip']=        $ses["ip"];
            $_SESSION['rol'] =$ses["rol"];
        }
        else
        {
           echo '<script language="javascript">';
           echo 'alert("¡Contraseña incorrecta!")';
           echo '</script>';
        }
    }
    else
    {
        echo '<script language="javascript">';
           echo 'alert("¡Nombre de usuario incorrecto!")';
           echo '</script>';
    }
    }
   
     
    }
 

if(isset($_GET['modo']) == 'desconectar')
{
    session_destroy();
    echo '<meta http-equiv="Refresh" content="2;url=GYM.php"> ';
    exit ('CERRANDO SESION.......');
}
     
if(isset($_SESSION['rol']))
{
 if ( $_SESSION['rol']== 'Administrador') {
echo '<meta http-equiv="Refresh" content="2;url=admin/admin.php?"> ';
 }
 elseif ( $_SESSION['rol']== 'Instructor') {
echo '<meta http-equiv="Refresh" content="2;url=instru/instru.php?"> ';
 }
 elseif ( $_SESSION['rol']== 'Cliente') {
echo '<meta http-equiv="Refresh" content="2;url=cliente/perfilc.php?"> ';
 }
}
else
{
?>

</div><div class="wrap">

        <div>
          <div class="input-group">
            <input type="text" name="nick" id="login_username">
            <label class="label" for="login_username">Nombre:</label>
          </div>

          <div class="input-group">
            <input type="password" id="login_password" name="pass">
            <label class="label" for="login_password">Contraseña:</label>
          </div>

        
          </div>
      
            
          <input type="submit" id="btn-submit"  class="enviar" name="login" value="Enviar">
        
      </form>
    </div>
  </div>

    <script src="js/formulario.js"></script>
  <?php 
}
   ?>





</html>
