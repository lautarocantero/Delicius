<?php

//controllers/crear_combos.php

require '../fw/fw.php';
require '../models/Clientes.php';
require '../models/ValidarExcepsion.php';   //esto es para los throws
require '../views/FormularioCliente.php';   

if(count($_GET) > 0){
    $cliente = new Clientes() ;
    //agregar los isset para validar
    $cliente->CrearCliente($_GET['nombre'],$_GET['email'],$_GET['pasword'],$_GET['telefono'],$_GET['direccion']);

    header("Location: clientes");
    
}

    $e = new Clientes();   
    $listaclientes = $e->GetClientes();
    

    $v = new FormularioCliente();     //V de vista
    $v->clientes = $listaclientes;
    $v->render();           //dibujar vista


?>

