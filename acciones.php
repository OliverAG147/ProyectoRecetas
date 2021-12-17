<?php
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        //Credenciales de conexion
        $Host = 'localhost';
        $Username = 'root';
        $Password = '';
        $dbName = 'apprecetas';
        
        //Crear conexion mysql
        $db = new mysqli($Host, $Username, $Password, $dbName);
        
        //revisar conexion
        if($db->connect_error){
        die("Connection failed: " . $db->connect_error);
        }
        
        //Extraer imagen de la BD mediante GET
        $result = $db->query("SELECT img_receta FROM receta WHERE id_receta = 8");
        
        if($result->num_rows > 0){
            $imgDatos = $result->fetch_assoc();
            
            echo '<img style = "width:200px;" src="data:image/jpeg;base64,'.base64_encode( $imgDatos['img_receta'] ).'"/>';
        }else{
            echo 'Imagen no existe...';
        }
    
?>
</body>
</html>