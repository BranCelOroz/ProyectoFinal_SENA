<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="shortcut icon" href="img/gymfav.png">
	<title>Shaloom Gym-Perfil</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-whith, user-scalable=no, initial-scale-1, maximum-scale=1, minium-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/admin.css">

</head>
<body>
    <div id="contenedor_cargas">
    <div id="cargas"></div>
    </div>


	<header>
      <div class="contenedor">
        <div id="marca">
          <center><h1 >SHALOOM<span class="resaltado">GYM</span></h1></center>
        </div>
      </div>  

     

      <nav class="menu">
        <ul >
         
          
        </ul>
        
      </nav>
</header>
<!--------------------------------------------------------------------------------------------------------------->
	<div class="perfil_container">
		<div class="perfil_top">
			<img class="perfil_img" src="img/eladmin.png" alt="">
			<h2 class="perfil_title">Shaloom <span>Gym</span></h2>
      <p>Administrador</p>
		</div>
    </div>
<!--------------------------------------------------------------------------------------------------------------->
<script>
  window.onload = function(){
    var contenedor = document.getElementById('contenedor_cargas');

    contenedor.style.visibility = 'hidden';
    contenedor.style.opacity = '0';
  }
</script>


<footer>
      <div class="foot"><p class="copy">Shaloom <span class="resaltado">GYM</span>, Copyright &copy; 2018</p></div>
    </footer>
</body>
</html>