
<?php

//controllers/crear_hamburguesas.php

require '../fw/fw.php';
require '../models/Bebidas.php';
require '../models/ValidarExcepsion.php';
require '../views/FormularioBebidas.php';

if(count($_GET) > 0){
    $bebida = new Bebidas() ;
    $bebida->InsertarBebidas($_GET['nombre'],$_GET['descripcion'],$_GET['precio'],$_GET['imagen']);
    header("Location: bebidas");
}

$v = new FormularioBebidas();     //V de vista
$v->render();           //dibujar vista


?>