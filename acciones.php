<?php
    include ("bd.php");
    print '<pre>';
    print_r($_POST);

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>
        <?php echo ($queryRecetas)?>
    </H1>
</body>
</html>