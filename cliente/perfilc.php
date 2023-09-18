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
  <link rel="stylesheet" type="text/css" href="css/min.css">
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
#maincontainer4{
  margin-top: 30px;
  margin-left: 180px;
  width: 450px;
}

.formtop {
  width: 100%;
  text-align: center;
  padding: 2rem 0 1rem;
  border-top: solid .4rem  #1293d4;
  margin-bottom: 1rem;
}

.formtop h2 {
  font-weight: bold;
  color: #24282b;
  font-size: 30px;
}

h2 span {
  color:  #1293d4;
}

.formreg {
  padding: 0 2rem;
  display: flex;
  flex-direction: column;
  justify-content: center;
color: white;
}

.btnform {
  display: flex;
  justify-content: space-around;
  margin-top: 1rem;
}

#input, .btnsubmit, .btnreset{
  background-color: #EFEFEF;
  padding: .5rem;
  margin: .5rem 0;
  margin: 10px;
  border: none;
  border-bottom: solid  #1293d4 .2rem;
  transition: all .5s;
  font-size: 18px;

}

#input:focus {
  border-bottom: solid #24282b .2rem;

}

.btnsubmit {
  width: 60%;
  border-bottom: none;
  background-color:#24282b;
  color: white;
}



.btnsubmit:hover {
  background-color: #1293d4;
}
form{
  width: 450px;
  background: rgba(0,0,0,0.4);
  padding: 50px 20px;
  box-sizing: border-box;
  margin-top: 20px;
  border-radius: 7px;
  margin-bottom: 10px;
  margin: auto;   
}
</style>
 <body>

    <header>
           
             <center><h1  style="font-size: 60px; margin-top: 0;" >SHALOOM<span class="resaltado">GYM</span></h1></center>
              <input type="checkbox" id="check"><label style="font-size: 30px; cursor: pointer;" for="check" class="icon-menu">Menú</label>
            
            
            <nav class="menu">
                <ul>
                <li><a href="Perfil.php"><span class="icon-user"></span> Mi Perfil</a>
          </li>
          <li><a href="Clasecliente.php"><span class="icon-calendar1"></span> Clases</a>
          </li>
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
         <li>CLIENTE</li>
         <li>HAROLD</li>
         <li>CLAVIJO</li>
       </ul>
      </div>
    </section>
<br>
<br>
    <div class="container-fluid">
 
  <div class="row">
    <div  class="col-md-6">
<h3 class="icon-bookmark1" style="color: #fff;text-align: center;"> MIS RUTINAS</h3>
  <br>
  <center>
 <table>
<thead>
 
  <th>Nombre</th>
  <th>Descripción</th>
  <th>Archivo</th>

</thead>
  <?php 

  $datos=$conexion->query("SELECT  nombre, descripcion, archivo FROM datos WHERE id='6'") or die('ha fallado la conexion');
  while ($sel=@mysqli_fetch_row($datos)) {
  ?>
  <tr>
    <td><?php echo $sel[0] ?></td>
    <td><?php echo $sel[1] ?></td>
    <td><?php echo "<a href='../file/".$sel[2]."'>descargar</a>"?></td>

  </tr>
  
    <?php } ?>
</table>
</center>
</div>
<div class="col-md-6"> 
  <h3 style="color: white; text-align: center;" class="icon-apple"> PLAN ALIMENTARIO</h3> 
  <br> 
  <center>           
<table>
<thead>
 
  <th>Nombre</th>
  <th>Descripción</th>
  <th>Archivo</th>
 
</thead>
  <?php 

  $data=$conexion->query("SELECT  nombre, descripcion, archivo FROM alimentacion") or die('ha fallado la conexion');
  while ($sele=@mysqli_fetch_row($data)) {
  ?>
  <tr>
  
    <td><?php echo $sele[0] ?></td>
    <td><?php echo $sele[1] ?></td>
    <td><?php echo "<a href=' ".$sele[2]."'>descargar</a>"?></td>
 
  </tr>
  
    <?php } ?>
</table>
</center>  
</div>
</div>
</div>



<div class="container-fluid">
 
  <div class="row">
    <div class="col-md-6" id="maincontainer4">
<?php 


$sel = $conexion -> query("SELECT * FROM clientes WHERE id='3'");
if ($fila=$sel->fetch_assoc()) {
}
 ?>
     <form  class="formreg" action="carga2.php" method="post" enctype="multipart/form-data" >
         <h2>Ingresar Mi Pago</h2>
   
          <input  name="name" id="input"readonly="readonly" required class="form-control" value="<?php echo $fila['nombres'] ?>" >
           <select id="input" style="color: black;" name="pagomes">
             <option>Enero</option>
             <option>Febrero</option>
             <option>Marzo</option>
             <option>Abril</option>
             <option>Mayo</option>
             <option>Junio</option>
             <option>Julio</option>
             <option>Agosto</option>
             <option>Septiembre</option>
             <option>Octubre</option>
             <option>Noviembre</option>
             <option>Dicembre</option>

           </select>
           <input type="file" name="archivo">
     


       <center> <input class="btnsubmit" type="submit" value="Enviar"> </center>
    </form>

    </div>
        <div class="col-md-6">
      <div id="maincontainer3" >
        <br>  
        <br>  
        <h3 style="color: white; text-align: center;" class="icon-credit">MIS PAGOS</h3> 
 <table>
<thead>
  <th>Nombre</th>
  <th>Mes de pago</th>
  <th>Archivo</th>
</thead>
  <?php 

  $datos=$conexion->query("SELECT  nombre, mes, archivo FROM pagos") or die('ha fallado la conexion');
  while ($sel=@mysqli_fetch_row($datos)) {
  ?>
  <tr>

    <td><?php echo $sel[0] ?></td>
    <td><?php echo $sel[1] ?></td>
    <td><?php echo "<a href=' ".$sel[2]."'>descargar</a>"?></td>

  </tr>
  
    <?php } ?>
</table>


</div>
</div>
</div>
</div>    



  <div class="container mt-40">
            <h3  class="icon-stats" style="text-align: center ;color: white; font-size: 40px;"> NOTICIAS</h3>
            <div class="row mt-30">
                <div class="col-md-4 col-sm-6">
                    <div class="box6">
                        <img src="img//VERDULERIA.jpg" style="height: 225px;" alt="">  
                        <div class="box-content">
                            <h3 class="title">Alimentación saludable.</h3>
                            <span class="post">  Necesitamos mas de 40 nutrientes diferentes y ningun alimento por si solo puede proporcionarlos todos.</span>
                           <ul class="icon">
                                    <li><a href="https://www.lanacion.com.ar/1927092-10-consejos-para-una-alimentacion-saludable"><i class="icon-search"></i></a></li>
                               </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box6">
                        <img src="img//EJERCICIO.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Beneficios del ejercicio</h3>
                            <span class="post"> Si quieres disfrutar de una vida saludable tienes que mover tu cuerpo para poder disfrutar de los beneficios de hacer ejercicio fisico.</span>
                             <ul class="icon">
                                    <li><a href="https://nutricsalud.com/fitness/beneficios-de-hacer-ejercicio"><i class="icon-search"></i></a></li>
                               </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box6">
                        <img src="img//SUPLEMENTOS.jpg" style="height: 225px;" alt="">
                        <div class="box-content">
                            <h3 class="title">El uso de suplementos</h3>
                            <span class="post"> La nutrición de un atleta de fuerza es importante porque normalmente sus marcas dependen de ella muy estrechamente.</span>
                             <ul class="icon">
                                    <li><a href="http://www.myprotein.es/thezone/suplementos/beneficios-suplementos-deportivos/"><i class="icon-search"></i></a></li>
                               </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<br>
<br>

  <div class="container mt-40">
            <div class="row mt-30">
                <div class="col-md-4 col-sm-6">
                    <div class="box6">
                        <img src="img//dietas.jpg" style="height: 225px;" alt="">  
                        <div class="box-content">
                            <h3 class="title">Consejos dietarios.</h3>
                            <span class="post"> ¿Eres deportista? ¿No sabes qué comer para mejorar tu rendimiento y mantenerte sano? </span>
                           <ul class="icon">
                                    <li><a href="https://www.lanacion.com.ar/1927092-10-consejos-para-una-alimentacion-saludable"><i class="icon-search"></i></a></li>
                               </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box6">
                        <img src="img//maraton.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Maratones</h3>
                            <span class="post"> ¿Buscas correr en alguna maraton? Aqui encontraras los proximos eventos.</span>
                             <ul class="icon">
                                    <li><a href="http://colombiacorre.com.co/calendario.html"><i class="icon-search"></i></a></li>
                               </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box6">
                        <img src="img//fisicoculturismo.jpg" style="height: 225px;" alt="">
                        <div class="box-content">
                            <h3 class="title">Fisicoculturismos</h3>
                            <span class="post"> Inscribete en concursos de fisicoculturismo, no pierdes nada con intentarlo.
                             <ul class="icon">
                                    <li><a href="http://www.fedefisicoifbb.com/calendario.ph"><i class="icon-search"></i></a></li>
                               </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>



<div class="foterfix"></div>

    <footer>
      <div ><p class="copy">Gimnasio Shaloom, Copyright &copy; 2018</p></div>
    </footer>
  </body>
</body>
</html>