<?php 
  require_once("bd.php");
  session_start();
  if (isset($_SESSION["usuario"])){

?>

<?php
    include ("bd.php");
    /*print '<pre>';
    print_r($_POST);*/

    $queryPre = "SELECT * FROM receta WHERE";

    if(isset($_POST["contBuscar"])){
        $Cbuscar= $_POST["contBuscar"];
        $queryLast = " name_receta LIKE '%$Cbuscar%'";
    }else{
        $queryLast = " name_receta LIKE '%%'";
    }
    $queryAND2 = "";


    if(isset($_POST["contPais"])){
        $Cpais= $_POST["contPais"];
    }else{
        $Cpais= 0;
    }
    switch ($Cpais){
        case 1:
            $QRC1 = " pais = 1";
            $queryAND = " AND";
            $queryAND2 = " AND";
            break;
        case 2:
            $QRC1 = " pais = 2";
            $queryAND = " AND";
            $queryAND2 = " AND";
            break;
        case 3:
            $QRC1 = " pais = 3";
            $queryAND = " AND";
            $queryAND2 = " AND";
            break;
        default:
            $QRC1 = "";
            $queryAND = "";
            
    }

    if(isset($_POST["contCategoria"])){
        $Ccategoria = $_POST["contCategoria"];
    }else{
        $Ccategoria = 0;
    }
    switch ($Ccategoria){
        case 1:
            $QRC2 = " categoria = 1";
            $queryAND2 = " AND";
            break;
        case 2:
            $QRC2 = " categoria = 2";
            $queryAND2 = " AND";
            break;
        case 3:
            $QRC2 = " categoria = 3";
            $queryAND2 = " AND";
            break;
        default:
            $QRC2 = "";
            $queryAND = ""; 
    }

    $queryRecetas = $queryPre.$QRC1.$queryAND.$QRC2.$queryAND2.$queryLast;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>SuperResetas</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/all.min.css">
        <link rel="stylesheet" href="mainstyle.css"/>
        <link rel="stylesheet" href="stylesOli.css"/>
    </head>
    <body>
        <div class="Contenedor">
            <header id="header">
                <!--Margen de la barra de navegación-->
                <div id="wrap">
                    <div id="logo">
                        <p>Super Recetas</p>
                    </div>
                    <!--Barra de navegación-->
                    <nav id="navbar">
                        <!--Elementos de la barra de navegación-->
                        <ul>

                            <div id= "divOli1" class="contenedoreecto">
                            
                            <li><a href="home.php">Home</a>
                            </li>
                                <div class="subrraefecto"></div>
                            </div>

                            <div class="contenedoreecto">
                            
                            <li><a href="crear_receta.php">Crear Receta</a></li>
                                <div class="subrraefecto"></div>
                            </div>

                            <div  class="contenedoreecto" style = "float: right; margin-right: 0px;">
                          
                            <li><a href="logout.php">Cerrar sesión</a></li>
                                <div class="subrraefecto"></div>
                            </div>

                        </ul>
                        <!--Fin de los Elementos de la barra de navegación-->
                    </nav>
                    <!--Fin de la Barra de navegación-->
                </div>
                <!--Fin del margen de la barra de navegación-->
            </header>
            <aside id="sidebar">
                <form method = "POST" action="Platillos.php" id="formstyleoli">
                     <div id="cont">
                        <input id="text" type="text" id="filtro" name = "contBuscar"> 
                        <button id="btn">Buscar</button>
                    </div>
                    <div id="cont">
                        <select name="contPais" placeholder="Ingrese Nombre"> 
                            <option class="select" value= "0">--Todos los Países--</option>
                            <option class="select" value= "1">México</option>
                            <option class="select" value= "2">Japon</option>
                            <option class="select" value= "3">Estados unidos</option>
                        </select>
                        <select name="contCategoria">
                            <option class="select" value="0">--Todas las Categorias--</option>
                            <option class="select" value="1">Comida</option>
                            <option class="select" value="2">Bebida</option>
                            <option class="select" value="3">Postre</option>
                        </select>
                        <button id="mts">Filtrar</button>
                    </div>
                </form>
                <section id = "sectionOli1">
                    <div>
                        <?php
                            $resultado = mysqli_query($conexion, $queryRecetas);
                            while($row = mysqli_fetch_assoc($resultado)){?> 
                                <form method = "POST" action="ver_receta.php" enctype="multipart/form-data" class = "divOli1">
                                    <div id = "divOli2">
                                      <?php echo $row["name_receta"]; ?>
                                    </div>    
                                    <div id = "divOli3">
                                        <img width="200" height = "200" src="data:image/jpeg;base64, <?php echo base64_encode( $row['img_receta'])?>"/>
                                    </div>
                                    <input id= "inputOli1" name = "id" type="" value ="<?php echo $row["id_receta"]; ?>">
                                    <input id= "inputOli1" name = "nombre" type="" value ="<?php echo $row["name_receta"]; ?>">
                                    <input id= "inputOli1" name = "ingredientes" type="" value ="<?php echo $row["ingrediente_receta"]; ?>">
                                    <input id= "inputOli1" name = "procedimiento" type="" value ="<?php echo $row["procedimiento_receta"]; ?>">
                                    <input id= "inputOli1" name = "categoria" type="" value ="<?php echo $row["categoria"]; ?>">
                                    <input id= "inputOli1" name = "pais" type="" value ="<?php echo $row["pais"]; ?>">

                                    <button type = "submit" class = "btnOli1"> Ver receta</button>
                                </form>
                                
                            <?php } ?>
                    </div>
                 </section>
            </aside>
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
                <div class="footerr">
                    <div class ="CopyRight"><!--CopyRight-->
                        © 2021 Todos Los Derechos Reservados |
                        <a href="">Super Recetas</a>
                    </div>
                    <div class="informacion">
                        <a href=""> Informacion Compañia</a> | 
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










