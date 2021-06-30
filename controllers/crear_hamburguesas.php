
<?php

    //controllers/crear_hamburguesas.php

    require '../fw/fw.php';
    require '../models/Hamburguesas.php';
    require '../models/ValidarExcepsion.php';
    require '../views/FormularioHamburguesa.php';

    if(count($_GET) > 0){
        
        $hamburgesita = new Hamburguesas() ;
        $hamburgesita->CrearHamburguesa($_GET['nombre'],$_GET['descripcion'],$_GET['precio'],$_GET['imagen']);
    
        header("Location: hamburguesas");
        
    }
    
    $v = new FormularioHamburguesa();     //V de vista
    $v->render();           //dibujar vista
    

?>