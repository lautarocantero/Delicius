<?php

    //controllers/lista_bebidas.php

    require '../fw/fw.php';
    require '../models/Clientes.php';
    require '../views/ListadoClientes.php';

    $e = new Clientes();
    $grupo = $e->GetClientes();

    $v = new ListadoClientes();
    $v->clientes = $grupo;
    $v->render();



?>