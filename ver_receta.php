<?php 
  require_once("bd.php");
  session_start();
  if (isset($_SESSION["usuario"])){

?>



<?php
    include ("bd.php");

    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $ingredientes = $_POST["ingredientes"];
    $procedimiento = $_POST["procedimiento"];

    switch ($_POST["categoria"]){
        case 1:
            $categoria = "Comida";
            break;
        case 2:
            $categoria = "Bebida";
            break;
        case 3:
            $categoria = "Postre";
    }
    switch ($_POST["pais"]){
        case 1:
            $pais = "Mexico";
            break;
        case 2:
            $pais = "Japon";
            break;
        case 3:
            $pais = "Estados Unidos";
    }

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
        <link href="img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
       	<link href="img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
       	<link href="img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
       	<link href="img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
       	<link href="img/favicon.png" rel="icon" type="image/png">
       	<link href="img/favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" href="public/css/lib/font-awesome/font-awesome.min.css">
        <link rel="stylesheet" href="public/css/lib/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="public/css/lib/bootstrap-sweetalert/sweetalert.css">
       	<link rel="stylesheet" href="public/css/separate/vendor/sweet-alert-animations.min.css">
        <link rel="stylesheet" href="public/css/main.css">
        <link rel="stylesheet" href="stylesOli.css">
    </head>
    <body> <!-- Cuerpo -->
        <header id="header">
            <!--Margen de la barra de navegaci??n-->
            <div id="wrap">
                <div id="logo">
                    <a href="home.php"></a>
                </div>
                <!--Barra de navegaci??n-->
                <nav id="navbar">
                    <!--Elementos de la barra de navegaci??n-->
                    <ul>
                        <li><a href="home.php">Home</a></li>
                        <li><a href="Platillos.php">Platillos</a></li>
                        <li><a href="logout.php">Cerrar sesi??n</a></li>
                    </ul>
                    <!--Fin de los Elementos de la barra de navegaci??n-->
                </nav>
                <!--Fin de la Barra de navegaci??n-->
            </div>
            <!--Fin del margen de la barra de navegaci??n-->
        </header>
        <!-- Contenido -->
        <div class="page-content">
            <div class="container-fluid">
                <div class="box-typical box-typical-padding">
                    <h5 class="m-t-lg with-border">Informaci??n de la Receta</h5>
                    <form>
                        <div class="row">                                       
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="cetegoria">Categoria</label>
                                    <input class="form-control" type= "text"  value="<?php echo $categoria?>" disabled>
                                </fieldset>
                            </div>
                            <div class="col-lg-2">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="pais">Pa??s de origen</label>
                                    <input class="form-control" type= "text"  value="<?php echo $pais?>" disabled>
                                </fieldset>
                            </div>
                            <div class="col-lg-3">
                                <fieldset class="form-group">
                                    <label class="form-label semibold" for="name_receta">Nombre de la receta</label >
                                    <input class="form-control" type= "text"  value="<?php echo $nombre?>" disabled>
                                </fieldset>
                            </div>
                            <div class="col-lg-4">
                                <label class="form-label semibold">imagen</label>
                                <?php
                                    $queryImg = mysqli_query($conexion,"SELECT img_receta FROM receta WHERE id_receta = $id");
                                    if($queryImg->num_rows > 0){
                                        $imgDatos = $queryImg->fetch_assoc();
                                        
                                        echo '<img style = "width:200px; height: auto;" src="data:image/jpeg;base64,'.base64_encode( $imgDatos['img_receta'] ).'"/>';
                                    }else{
                                        echo 'Imagen no existe...';
                                    }
                                ?>
                            </div>
                            <div class="col-lg-4">
                                <label  class="form-label semibold">Ingredientes</label>
                                <textarea class="form-control" name="ingrediente_receta" id="ingrediente_receta"  rows="10" disabled><?php echo $ingredientes?></textarea>
                            </div>
                            <div class="col-lg-6">
                                <label  class="form-label semibold">Procedimiento</label>
                                <textarea class="form-control" id="procedimiento_receta" name="procedimiento_receta"  rows="10" disabled><?php echo $procedimiento?></textarea>
                            </div>
                            <br>
                            <div class="col-lg-12">
                                <br>
                                <a href="Platillos.php" class="btn btn-rounded btn-inline btn-primary">regresar</a>
                            </div>
                        </div>   
                    </form>                                      
                </div>
            </div>
        </div>
        <!-- Fin Contenido -->
        <footer> <!-- Pie De Paguina Se Utiliza el Footer -->
            <div class="contenido-footer-all">
                <div class="contenido-body">
                    <div class="colum1"> <!--Informacion de la compa??ia-->
                        <h1> Mas Informacion De La Compa??ia </h1>
                        <p> Esta Compa??ia Fue creada Con La Intecion de 
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
                        ?? 2021 Todos Los Derechos Reservados |
                        <a href="">Super Recetas</a>
                    </div>
                    <div class="informacion">
                        <a href=""> informacion de la Compa??ia</a> | 
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









