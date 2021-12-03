<?php
    include ("bd.php");
    $query=mysqli_query($conexion,"SELECT id_categoria,name_categoria FROM categoria");
    $query2=mysqli_query($conexion,"SELECT id_pais,name_pais FROM pais");

?>
<?php 
    include "bd.php";
    error_reporting(0);
    session_start();
    

    if(isset($_POST['btncrear'])){
        $img_receta=$_POST["img_receta"];
        $categoria=$_POST["categoria"];
        $pais=$_POST["pais"];
        $name_receta=$_POST["name_receta"];
        $ingrediente_receta=$_POST["ingrediente_receta"];
        $procedimiento_receta=$_POST["procedimiento_receta"];

        $consulta="INSERT INTO receta (name_receta,ingrediente_receta,procedimiento_receta,img_receta,categoria,pais) 
        VALUE ('$name_receta', '$ingrediente_receta', '$procedimiento_receta','$img_receta', '$categoria', '$pais')";
        $resultado=mysqli_query($conexion,$consulta);

        if($resultado){

            echo "<script language='JavaScript'>alert('La receta se ha creado con éxito')</script>";
            $img_receta="";
            $categoria="";
            $pais="";
            $name_receta="";
            $ingrediente_receta="";
            $procedimiento_receta="";
            
        }else{
            echo "<script language='JavaScript'>alert('Hay un error')</script>";
        }
        mysqli_close($conexion);
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

             <!-- Contenido -->
       <div class="page-content">
                
                <div class="container-fluid">
        
        
                 <div class="box-typical box-typical-padding">
                                  <p>
                             Desde esta ventana podrás generar nuevas recetas:
                                  </p>
                     
                     
                           <h5 class="m-t-lg with-border">Ingresar Información</h5>
        
                            
                    <form method="POST" action="">

                            <div class="row">                                       
                                   <div class="col-lg-2">
                                     <fieldset class="form-group">
                                       <label class="form-label semibold" for="cetegoria">Categoria</label>
                                               <select id="categoria" name="categoria" class="form-control">
                                               <?php 
                                                    while($datos = mysqli_fetch_array($query))
                                                    {
                                                 ?>
                                                     <option value="<?php echo $datos['id_categoria'] ?>"> <?php echo $datos['name_categoria'] ?> </option>
                                                 <?php 
                                                    }
                                                 ?>
                                               </select>
                                     </fieldset>
                                   </div>
                                   <div class="col-lg-2">
                                     <fieldset class="form-group">
                                       <label class="form-label semibold" for="pais">País de origen</label>
                                               <select id="pais" name="pais" class="form-control">
                                               <?php 
                                                      while($datos = mysqli_fetch_array($query2))
                                                      {
                                                   ?>
                                                       <option value="<?php echo $datos['id_pais'] ?>"> <?php echo $datos['name_pais'] ?> </option>
                                                   <?php 
                                                      }
                                                   ?>
                                               </select>
                                     </fieldset>
                                   </div>
                                   <div class="col-lg-3">
                                     <fieldset class="form-group">
                                       <label class="form-label semibold" for="name_receta">Nombre de la receta</label>
                                       <input type="text" class="form-control" id="name_receta" name="name_receta"  placeholder="Ingrese Nombre">
                                     </fieldset>
                                   </div>
                                   <div class="col-lg-4">
                                   <label class="form-label semibold">Elije una imagen</label>
                                       <input type="file" name="img_receta" id="img_receta">
                                   </div>

                                   <div class="col-lg-4">
                                     <label  class="form-label semibold">Ingredientes</label>
                                        <textarea class="form-control" name="ingrediente_receta" id="ingrediente_receta"  rows="10"></textarea>
                                    </div>
                                    <div class="col-lg-6">
                                     <label  class="form-label semibold">Procedimiento</label>
                                        <textarea class="form-control" id="procedimiento_receta" name="procedimiento_receta"  rows="10"></textarea>
                                    </div>
                                    <br>
                                   <div class="col-lg-12">
                                       <br>
                                          <button type="submit" name="btncrear" value="crear" class="btn btn-rounded btn-inline btn-primary">Crear</button>
                                   </div>

                            </div>   

                    </form>                                      
        
                 </div>
             
           </div>
     
        </div>
      <!-- Contenido -->

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

