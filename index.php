<?php

include 'php/conexion.php';

$result = mysqli_query($conn, "SELECT know FROM know"); 

?>

<!DOCTYPE html>
  <html lang='es'>
      <head>
           <title>Portafolio</title>
           <meta charset='UTF-8' />
           <meta name="viewport" content="width:device-width,maximum-scale=1"/>
           <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,400italic' rel='stylesheet' type='text/css'>
           <link rel="icon" href="image/fav.png">
           <link rel="stylesheet" type="text/css" href="static/css/estilos.css">
           <link rel="stylesheet" type="text/css" href="static/css/normalize.css">
           <script src="jquery-1.3.2.min.js" type="text/javascript"></script>  
           <script src="static/js/edit.js"></script>
      </head>

      <body>
      	<header id='yo' class="Header">
      		<nav class="MainMenu">
      			<ul class="MainMenu-list">
      				<li class="MainMenu-item">
      					<a href="#yo" class="MainMenu-link">Yo</a>
      				</li>
      				<li class="MainMenu-item">
      					<a href="#perfil" class="MainMenu-link">Perfil</a>
      				</li>
      				<li class="MainMenu-item">
      					<a href="#trabajo" class="MainMenu-link">Trabajo</a>
      				</li>
      				<li class="MainMenu-item">
      					<a href="#contacto" class="MainMenu-link">Contacto</a>
      				</li>
      			</ul>
      		</nav>
      		<figure class="Header-imageContainer">
      			<img src="image/edisonosorio.jpg" alt="Imagen personal"  class="Header-image"/>
      			<figcaption class="Header-imageDescription">
      				<a class="Header-link" href="http://twitter.com/EdisonOsorio7" target='_black'>@EdisonOsorio7</a>
      			</figcaption>
      			<p class="Header-name">Edison Osorio</p>
      		</figure>

      	</header>     	
      	<section id="perfil" class="Profile">
                  <div class="u-containerDefault">
                  <h2 class="Profile-title u-title">Perfil</h2>
                  <p class="Profile-description">
                        Hola llegaste a mi portafolio. Mis conocimientos:
                  </p>
                  <?php
                  while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) { 
                        ?>
                  <a class="Profile-link know" href='action.php'><?php printf($row["know"]);}?></a>
                  <a href="crear.php">Cr</a>
                  <a href="editar.php">Ed</a>
                  <a href="eliminar.php">El</a>
                  </div>
      	</section>
      	<section id="trabajo" class="Work">
                  <div class="u-containerDefault">
                        <h2 class="Work-title u-title">Mi Trabajo</h2>
                  </div>
                  <article class="Work-item">
                        <figure class="Work-imageContainer">
                              <a href="http://cocorricosas.com">
                              <img class="Work-image" src="image/proyecto.png" alt="Cocorrico SAS">
                              </a>
                              <figcaption class="Work-description">Cocorrico SAS</figcaption>
                        </figure>
                  </article>
                  <article class="Work-item">
                        <figure class="Work-imageContainer">
                              <a href="http://bomberosmarinilla.com/">
                                    <img class="Work-image" src="image/proyecto2.png" alt="Bomberos Marinilla">
                              </a>
                              <figcaption class="Work-description">
                                    Bomberos Marinilla
                              </figcaption>
                        </figure>
                  </article>
                  <article class="Work-item">
                        <figure class="Work-imageContainer">
                              <a href="http://aeroglassrc.com/">
                                    <img class="Work-image" src="image/aeroglas_inicio.jpg" alt="Aeromodelismo">
                              </a>
                              <figcaption class="Work-description">
                                    Aeroglas RC - Aeromodelismo
                              </figcaption>
                        </figure>
                  </article>
            </section>
            <footer id='contacto' class="Footer">
                  <div class='Footer-left'>
                  <h3 class="Footer-title">Contacto</h3>
                  <p class="Footer-description">Tienes una sugerencia o quieres trabajar conmigo. Contactame con este formulario</p>
                  </div>
                        <form class="Footer-form" method="post" action="php/email.php" name="formu">
                        <input class="Footer-formInput" type="text" name="nombre" placeholder="Nombre" value="" />
                        <input class="Footer-formInput" type="email" name="email" placeholder="Email" value="" />
                        <textarea placeholder="Motivo" class="Footer-textarea" name="motivo" value=""></textarea>
                        <button type="submit" class="Footer-button"> Contactarme </button>
                  </form>
      	</footer>
            <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
      </body>
  </html>