
<?php

    //controllers/crear_hamburguesas.php

    require '../fw/fw.php';
    require '../models/Hamburguesas.php';
    require '../views/CrearHamburguesa.php';

    if(count($_GET) > 0){
        // $nombre = $_GET['nombre'];
        // $descripcion = $_GET['descripcion'];
        // $precio = $_GET['precio'];
        // $imagen = $_GET['imagen'];
        $hamburgesita = new Hamburguesas() ;
        //agregar los isset para validar
        $hamburgesita->InsertarHamburguesa($_GET['nombre'],$_GET['descripcion'],$_GET['precio'],$_GET['imagen']);
    
        header("Location: lista_hamburguesas.php");
        
    }
    
    $v = new CrearHamburguesa();     //V de vista
    $v->render();           //dibujar vista
    

?>