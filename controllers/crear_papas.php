
<?php

    //controllers/crear_papas.php

    require '../fw/fw.php';
    require '../models/Papas.php';
    require '../views/FormularioPapas.php';

    if(count($_GET) > 0){
        $papita = new Papas() ;
        //agregar los isset para validar
        $papita->CrearPapas($_GET['nombre'],$_GET['descripcion'],$_GET['precio'],$_GET['imagen']);
    
        header("Location: papas");
        
    }
    
    $v = new FormularioPapas();     //V de vista
    $v->render();           //dibujar vista
    





?>