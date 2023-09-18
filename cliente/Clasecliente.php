<?php include 'conexion2.php' ?>
<!DOCTYPE html>
<html lang="es">
  <head>
  <link rel="shortcut icon" href="img/gymfav.png">
  <title>Shaloom Gym</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-whith, user-scalable=no, initial-scale-1, maximum-scale=1, minium-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/pagprincipal.css">
  <link rel="stylesheet" type="text/css" href="css/styleicon.css">
  <link rel="stylesheet" type="text/css" href="css/menu2.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="	css/min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style type="text/css">
html{
	margin: 0px;
}
.contaner {
  max-width: 300px;
  width: 1500px;
  height: auto;
  
  background-color: #EFEFEF;
  margin: 5% auto;
  padding-bottom: 1rem;}
  
     .perfilcontainer {

  background-color: #EFEFEF;
  width: 300px;
  border-top: solid .5rem #24282b;
  padding: 3rem 0;
  box-shadow: 0 0 .5rem #24282b;
margin-top: 0px;
margin-right: 100px;
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


</style>
 <body>
   <header>
           
             <center><h1  style="font-size: 60px; margin-top: 0;" >SHALOOM<span class="resaltado">GYM</span></h1></center>
              <input type="checkbox" id="check"><label style="font-size: 30px; cursor: pointer;" for="check" class="icon-menu">Menú</label>
            
            
            <nav class="menu">
                <ul>
                <li><a href="perfilc.php"><span class="icon-home1"></span> Inicio</a>
          </li>
          <li><a href="Perfil.php"><span class="icon-user"></span> Mi perfil</a>
          </li>
         
          <li><?php user_login();
            echo '<a href="../GYM.php?modo=desconectar"><span class="icon-log-out">CERRAR SESIÓN</span></a>'; ?></li>
          
          
                </ul>
            </nav>
            </header>

<div class="foterfix"></div>
<br>
<br>
  
      <div class="container mt-40">
            <h3  class="icon-trophy" style="text-align: center ;color: white; font-size: 40px;"> CLASES</h3>
            <div class="row mt-30">
                <div class="col-md-4 col-sm-6">
                    <div class="box6">
                        <img src="img/zumba.jpg" alt="">	
                        <div class="box-content">
                            <h3 class="title">ZUMBA</h3>
                            <span class="post"> Disfruta realizar pasos de ritmos exóticos mezclados con música latina e internacional llena de energía.</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box6">
                        <img src="img/kickboxing.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">KICKBOXING</h3>
                            <span class="post"> Es un deporte de auténtico contacto que combina destreza y contundencia con brazos y piernas.</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box6">
                        <img src="img/aerobicos.jpg" style="height: 240px;" alt="">
                        <div class="box-content">
                            <h3 class="title">AEROBICOS</h3>
                            <span class="post">El ejercicio aeróbico es un ejercicio físico el cual necesita implícitamente de la respiración para poder realizarse.</span>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

<br>
<br>
 <style type="text/css">
  #info1 {
  background: #333;
  color: #fff;
  text-align: left;
  padding: 5px;
margin-top: 25px;


}
#info1 .contenedor1 {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
width: 100%;
}

.info-gym1 {
  margin:35px;
  margin-bottom: 25px;
  margin-top: 10px;
  margin-left: 100px;
  text-align: center;
  width: 30px;
}

@media (min-width:480px){
  .info-gym1{
    width: auto;
  }
}
@media (min-width:1024px){
  .info-gym1{
    width: auto;
  }
}
img{
	display: inline-block;
}
</style>
 <section id="info1">
     <h2 class="icon-thumbsup" > Razones para estar en forma:</h2>
      <div class="contenedor1">
          <div class="info-gym1">
          <img src="img/razon01.png">= Presión Sanguínea.<br>	
          <img src="img/razon02.png">= Mejor salud mental.<br>	
          <img src="img/razon03.png">= Huesos mas fuertes.<br>	
          <img src="img/razon04.png">= Defensas del cuerpo  .
          </div>
          <div class="info-gym1">
          <img src="img/razon05.png">= .Mejor Flexibilidad  .<br>
          <img src="img/razon06.png">= Mayor productividad.<br>
          <img src="img/razon07.png">= Evita la diabetes tipo 2<br>
          <img src="img/razon08.png">= Energía en equilibrio.
          </div>
              <div class="info-gym1">
        <div class="contaner">

<?php 


$sel = $conexion -> query("SELECT * FROM clientes WHERE id='3'");
if ($fila=$sel->fetch_assoc()) {
}
 ?>
    <div class="formtop">
      <h2> <span>Inscribete a una clase:</span></h2>
    </div>    
<form  class="formreg" action="registroclases.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id?>">
          <input  name="nombre" id="input" readonly="readonly" required class="form-control" value="<?php echo $fila['nombres'] ?>"   >
          <input  name="apell" id="input" type="text" readonly="readonly" required class="form-control" value="<?php echo $fila['apellidos'] ?>"  >
           <input  name="mail" id="input" type="email" readonly="readonly" required class="form-control" value="<?php echo $fila['correo'] ?>"   >
           <select name="select" style="color: black" class="clase">
            <label>Clase</label>
             <option >Zumba</option>
             <option >Kickboxing</option>
             <option >Aerobicos</option>
           </select>


       <center> <input class="btnsubmit" type="submit" value="Enviar"> </center>
    </form>
  </div>
         </div>
    </section>









<div class="foterfix"></div>

    <footer>
      <div ><p class="copy">Gimnasio Shaloom, Copyright &copy; 2018</p></div>
    </footer><footer>
  <div class="foot"><p class="copy">Shaloom GYM, Copyright &copy; 2018</p></div>
</footer>
</body>
</html>
