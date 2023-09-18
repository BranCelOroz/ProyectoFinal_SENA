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
  <link rel="stylesheet" type="text/css" href="css/admin.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/styleicon.css">
  <link rel="stylesheet" type="text/css" href="css/menu2.css">
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
<style type="text/css">
  .container-fluid{
 width: 100%;
  max-width:auto;
  margin: 30px auto;
  margin-top: 80px;
  height: auto;
  display: flex;
  justify-content: space-between;
  flex-wrap:wrap;
text-align: center;

  }
</style>

<div class="container-fluid">

<div class="row">
  <div class="col-md-6">
<form name="registrar" action=""  method="post" onsubmit="return validar()" />
  <div class="login" style="margin-left: -50px;" >
 
    <div>
    <?php
if(isset($_POST['registro']))//Vallidamos que el formulario fue enviado
{
    /*Validamos que todos los campos esten llenos correctamente*/
    if(($_POST['nick'] != '') && ($_POST['mail'] != '') && ($_POST['pass'] != '') && ($_POST['conf_pass'] != '')&&($_POST['rol'] != '') )
    {
        if($_POST['pass'] != $_POST['conf_pass'])
        {
            echo '<script>alert("Las Contraseñas no coinciden")</script> ';
        }
        else
        {
            $date= time(); 
            $nick= limpiar($_POST['nick']);
            $mail= limpiar($_POST['mail']);
            $pass= md5(md5(limpiar($_POST['pass'])));
            $ipuser= $_SERVER['REMOTE_ADDR'];
            $rol= limpiar($_POST['rol']);
             
            $b_user= $conexion ->query("SELECT nick FROM usuarios WHERE nick='$nick'");
            if($user=@mysqli_fetch_array($b_user))
            {
                echo '<script>alert("El nombre de usuario o el email ya esta registrado.")</script> ';
                mysqli_free_result($b_user); //liberamos la memoria del query a la db
            }
            else
            {
                if(validar_email($_POST['mail']))
                {
                    $res=$conexion ->query("INSERT INTO usuarios (fecha,nick,mail,pass,ip,rol) values ('$date','$nick','$mail','$pass','$ipuser','$rol')");
                    echo '<script>alert("Registro Completado")</script> ';
                }
                else
                {
                    echo '<script>alert.crear("Correo Incorrecto")</script> ';
                }
            }
        }
    }
    else
    {
        echo '<script>alert("Deberas llenar todos los campos.")</script> ';  
    }
}
?>
  <h2 id="hi">Registro</h2>
  <input name='nick' placeholder='Nombre' type='text' id="nick" />
  <input name='mail' placeholder='E-Mail Address' type='text' id="mail" class="field required"/>
  <input name='pass' id="pass" class="field required" placeholder='Contraseña' type='password'/>
  <input name='conf_pass' id="conf_pass" class="field required" placeholder='confirme Contraseña' type='password'/>
  <select name="rol" type='text' style="background-color:#6E6E6E;">
  <option> Administrador </option>
  <option> Instructor </option>
  <option> Cliente </option>
  </select>
  
  <input class='animated' name="registro" type='submit' value='Register'><br>
    
  <input type="reset" name="Limpiar"  value="Limpiar" class="animated"/>
    </div>

 </div>
</form>
</div>



<!--------------------------------------------------------------------------------------------->

  <div class="col-md-6">
<div style="margin-left: -150px;" id="main_containers"> 
  <table>
    <thead>
    
        <th>Nombre</th>
        <th>Email</th>
        <th>Rol</th>
        <th></th>
        <th></th>
    </thead>
    <?php
    $sel=$conexion->query("SELECT * FROM usuarios");
    while ($fila=$sel->fetch_assoc()) {
    ?>
  
    <tr>
      <td><?php echo $fila['nick'] ?></td>
      <td><?php echo $fila['mail'] ?></td>
      <td><?php echo $fila['rol'] ?></td>
      <td><a href="registro.php?id=<?php echo $fila['id'] ?>" ><span id="hii" class="icon-pencil1"></span></a></td>
    <td><a href="borrar.php?id=<?php echo $fila['id'] ?>" ><span id="hii" class="icon-trashcan"></span></a></td>
    </tr>
<?php } ?>
  </table>
<?php 
  if (isset($_GET['id'])){
    include("actualizar.php");
  }
 ?>


</div>
</div>
</div>
</div>
</body>









<div class="foterfix"></div>

    <footer>
      <div ><p class="copy">Shaloom GYM, Copyright &copy; 2018</p></div>
    </footer>
</html>




