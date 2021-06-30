
<?php

//controllers/crear_hamburguesas.php

require '../fw/fw.php';
require '../models/Bebidas.php';
require '../models/ValidarExcepsion.php';
require '../views/CrearBebidas.php';

if(count($_GET) > 0){
    // $nombre = $_GET['nombre'];
    // $descripcion = $_GET['descripcion'];
    // $precio = $_GET['precio'];
    // $imagen = $_GET['imagen'];
    $bebida = new Bebidas() ;
    //agregar los isset para validar
    $bebida->InsertarBebidas($_GET['nombre'],$_GET['descripcion'],$_GET['precio'],$_GET['imagen']);

    header("Location: bebidas");
    
}

$v = new CrearBebidas();     //V de vista
$v->render();           //dibujar vista


?>