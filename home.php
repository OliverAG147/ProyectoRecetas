<?php 
  require_once("bd.php");
  session_start();
  if (isset($_SESSION["usuario"])){

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>SuperResetas</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="estiloP1.css">
        <link rel="stylesheet" href="mainstyle.css"/>
    </head>


     <body> <!-- Cuerpo -->
                    <header id="header">
                        <!--Margen de la barra de navegación-->
                        <div id="wrap">
                            <div id="logo">
                                <a href="home.php"></a>
                            </div>
                              <!--Barra de navegación-->
                            <nav id="navbar">
                             <!--Elementos de la barra de navegación-->
                                <ul>
                                <li><a href="home.php">Home</a></li>
                                 <li><a href="Platillos.php">Platillos</a></li>
                                 <li><a href="logout.php">Cerrar sesión</a></li>
                              </ul>
                              <!--Fin de los Elementos de la barra de navegación-->
                            </nav>
                            <!--Fin de la Barra de navegación-->
                        </div>
                     <!--Fin del margen de la barra de navegación-->
                    </header>

                    <br>
                    <br>
           <div id="carrucel" align="center">

                <ul>
                    <li><img src="img/plato 1.jpeg" alt=""></li>
                    <li><img src="img/plato 2.jpg" alt=""></li>
                    <li><img src="img/plato 3.jpg" alt=""></li>
                    <li><img src="img/plato 4.jpg" alt=""></li>
                </ul>
            </div> 

            <footer> <!-- Pie De Paguina Se Utiliza el Footer -->

                <div class="contenido-footer-all">
            
                    <div class="contenido-body">
            
                        <div class="colum1"> <!--Informacion de la compañia-->
                                <h1> Mas Informacion De La Compañia </h1>
                                <p> Esta Compañia Fue creada Con La Intecion de 
                                    Ayudarte A Saber preparar tus propios platillos 
                                    ya sean creador por otras personas o hechos por 
                                    ti mismo </p>
                        </div>
        
                        <div class="colum2"><!--Redes Sociales-->
                            <h1>Redes Sociales</h1>
                            <div class="row">
                                <img src="img/facebook.png">
                                <label> Siguenos En FaceBook </label>
                            </div>
                            <div class="row">
                                <img src="img/twitter.png">
                                <label> Siguenos En Twitter </label>
                            </div>
                            <div class="row">
                                <img src="img/instagram_logo_icon_181283.png"></i>
                                <label> Siguenos En Instagram </label>
                            </div>
                        </div>
        
                        <div class="colum3"><!--Informacion De Contactos-->
                            <h1>Informacion Contactos</h1>
                            <div class="row2">
                                <img src="img/casa.png">
                                <label>Isla Del Bosque | Escuinapa Sinaloa | casa # x</label>
                            </div>
            
                            <div class="row2">
                                <img src="img/telefono.png">
                                <label>695-122-1764</label>
                            </div>
            
                            <div class="row2">
                                <img src="img/mail.png">
                                <label>Zmadel_Oficial@hotmail.com</label>
                            </div>
                            
                        </div>
        
                    </div>
                    
                   
            
                </div>
                    
                <div class="contenido-footer">
                  <div class="footer">
                    <div class ="CopyRight"><!--CopyRight-->
                        © 2021 Todos Los Derechos Reservados |
                         <a href="">Super Recetas</a>
                    </div>
            
                    <div class="informacion">
                           <a href=""> informacion de la Compañia</a> | 
                           <a href=""> Privacion y Politica</a> |
                           <a href=""> Terminos y Condiciones</a>
                    </div>
                  </div>
                </div>
                       </footer>
    </body>
</html>
<?php
  } else{
	  echo'<SCRIPT LANGUAGE="javascript">
      location.href = "index.php";
      </SCRIPT>';
  }
?>
