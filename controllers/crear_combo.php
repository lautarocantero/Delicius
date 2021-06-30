<?php

//controllers/crear_combos.php

require '../fw/fw.php';
require '../models/Combos.php';
require '../models/Hamburguesas.php';
require '../models/Papas.php';
require '../models/Bebidas.php';
require '../models/ValidarExcepsion.php';
require '../views/CrearCombos.php';

if(count($_GET) > 0){
    // $nombre = $_GET['nombre'];
    // $descripcion = $_GET['descripcion'];
    // $precio = $_GET['precio'];
    // $imagen = $_GET['imagen'];
    $combo = new Combos() ;
    //agregar los isset para validar
    $combo->InsertarCombos($_GET['precio'],$_GET['imagen'],$_GET['nombre'],$_GET['descripcion'],$_GET['hamburguesa'],$_GET['bebidas'],$_GET['papas'],);

    header("Location: combos");
    
}

    $a = new Hamburguesas();   
    $menuhamburguesa = $a->GetMenu();
    
    $b = new Bebidas();
    $menubebidas = $b->GetMenu();

    $c = new Papas();
    $menupapas = $c->GetMenu();

    $v = new CrearCombos();     //V de vista
    $v->hamburguesas = $menuhamburguesa;
    $v->bebidas = $menubebidas;
    $v->papas = $menupapas;
    $v->render();           //dibujar vista


?>

