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
  <link rel="stylesheet" type="text/css" href="css/contacto.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style type="text/css">
  #bodymap{
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;

}

.container-fluid{
 width: 100%;
  max-width:auto;
  height: auto;
  display: flex;
  justify-content: space-between;
  flex-wrap:wrap;


  }
h2{
    text-align: center;
    font-size: 40px;
    color:white;
    margin-top:  20px;
    margin-bottom: 20px;

}
@media (min-width:768px) {
    .maps {
        width: auto;
         justify-content: center;
    align-items: center;
    }
    .mapa {
        width: auto;
         justify-content: center;
    align-items: center;
} 


@media (min-width:300px) {
    .maps {
        width: auto;
         justify-content: center;
    align-items: center;
    }
    .mapa {
        width: auto;
         justify-content: center;
    align-items: center;
    }
}

</style>
  <body>

     <?php
 

if(isset($_GET['modo']) == 'desconectar')
{
    session_destroy();
    echo '<meta http-equiv="Refresh" content="2;url=GYM.php"> ';

}
    

?>  
    
  <header>
           
             <center><h1  style="font-size: 60px; margin-top: 0;" >SHALOOM<span class="resaltado">GYM</span></h1></center>
              <input type="checkbox" id="check"><label style="font-size: 30px; cursor: pointer;" for="check" class="icon-menu">Menú</label>
            
            
            <nav class="menu">
                <ul>
                <li><a href="GYm.php"><span class="icon-home1"></span> Inicio</a></li>
          </li>
          <li><a href="conoce.php"><span class="icon-location1"></span> Conoce nuestro gimnasio</a></li>
          <li><a href="sesion.php"><span class="icon-user1"></span> Iniciar Sesión</a></li>
                </ul>
            </nav>
            </header>
  
    <section id="cabecera">
      <div class="contenedor">
      </div>
    </section>
    <section id="info">
     <h2 >SHALOOM GYM,TU MEJOR OPCIÓN</h2>
      <div class="contenedor">
          <div class="info-gym">
          <img src="img/dirigidas.png">
          <h4 style="  color:#1293d4;"> CLASES DIRIGIDAS </h4>
          <h5>Reduce grasa corporal</h5>
          <h5>Fortalece tus huesos y músculos</h5>
          <h5>Mejorar tu sistema cardiovascular</h5>
          <h5>Influye positivamente en tu ánimo</h5>
          </div>
          <div class="info-gym">
          <img src="img/entrenamiento.png">
          <h4 style="  color:#1293d4;"> ENTRENAMIENTO DE PESAS</h4>
          <h5>Pierde grasa</h5>
          <h5>Incrementa tu metabolismo</h5>
          <h5>Disminuye el riesgo de osteoporosis</h5>
          <h5>Refuerza tendones, ligamentos y articulaciones</h5>

          </div>
          <div class="info-gym">
          <img src="img/crossfit.png">
          <h4 style="  color:#1293d4;"> CROSSFIT</h4>
          <h5>Rebaja el porcentaje de grasa corporal</h5>
          <h5>Incrementa tu masa magra</h5>
          <h5>Aumenta tu fuerza muscular</h5>
              <h5>Mejora tu imagen personal</h5>
          </div>
         </div>




    </section>

     <div class="container">
     <h2 class="icon-camera"> GALERÍA</h2>  
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
     <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
     </ol>

     <!-- Wrapper for slides -->
     <div class="carousel-inner">
       <div class="item active">
        <img src="img/14.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/10.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="img/11.jpg" alt="New york" style="width:100%;">
      </div> 

      <div class="item">
        <img src="img/12.jpg" alt="New york" style="width:100%;">
      </div>

      <div class="item">
        <img src="img/13.jpg" alt="New york" style="width:100%;">
      </div>
     </div>

     <!-- Left and right controls -->
     <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
     </a>
     <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
     </a>
     </div>
    </div>
    <div class="social">
    <ul>
      <li><a class="icon-facebook"></a></li>
      <li><a class="icon-youtube"></a></li>
      <li><a class="icon-twitter"></a></li>
      <li><a class="icon-pinterest"></a></li>
      <li><a class="icon-instagram"></a></li>
    </ul>
  </div>
  </div>
</section>
<div class="container-fluid">

<div class="row">
  <div class="col-md-6">
 <div class="maps" >
    <div id="hi">
      <h2 class="icon-location2">¿DONDE ESTAMOS UBICADOS?</h2>
    </div>
    <div class="mapa" id="bodymap">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248.51240809223168!2d-74.27032141955397!3d4.735544376194277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f79b4052a500f%3A0x181a5e62a9836a53!2sshaloom+gym!5e0!3m2!1sen!2sus!4v1531357874018" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
  </div>
</div>





<!--------------------------------------------------------------------------------------------->
  <div class="col-md-6">
    <center>
<div class="holu">
  <h2 class="icon-phone1"> CONTÁCTANOS</h2>
  <br>
  <form action="guardari.php" method="post">
<input type="text" name="nombre" placeholder="Nombre" required="autofocus">
<input type="text" name="correo" placeholder="Correo" required="autofocus">
<input type="text" name="telefono" placeholder="Telefono" required="autofocus">
<textarea name="mensaje" placeholder="Escriba aqui su mensaje" required="autofocus"></textarea>
<input type="submit" value="ENVIAR" id="boton">
  </form>
 <h3>NUESTROS DATOS</h3>
 <h4>shaloomgym@gmail.com</h4>
 <h4>312465987-8415623</h4>
</div>
</center>
</div>
</div>
</div>



   
   
<div class="foterfix"></div>

    <footer>
      <div ><p class="copy">Shaloom GYM, Copyright &copy; 2018</p></div>
    </footer>
</html>
