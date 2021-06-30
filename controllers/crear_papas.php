
<?php

    //controllers/crear_papas.php

    require '../fw/fw.php';
    require '../models/Papas.php';
    require '../views/CrearPapas.php';

    if(count($_GET) > 0){
        // $nombre = $_GET['nombre'];
        // $descripcion = $_GET['descripcion'];
        // $precio = $_GET['precio'];
        // $imagen = $_GET['imagen'];
        $papita = new Papas() ;
        //agregar los isset para validar
        $papita->InsertarPapas($_GET['nombre'],$_GET['descripcion'],$_GET['precio'],$_GET['imagen']);
    
        header("Location: papas");
        
    }
    
    $v = new CrearPapas();     //V de vista
    $v->render();           //dibujar vista
    





?>