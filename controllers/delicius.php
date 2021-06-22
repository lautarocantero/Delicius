<?php

    //controllers/delicius.php

    
require '../fw/fw.php';
require '../models/Delicius.php';   //clase hamburguesas en MODEL
require '../views/Indice.php';   //clase hamburguesas en VIEW


$e = new Delicius(); 
$mostrar_indice = $e->Indice();

$v = new Indice();     //V de vista
$v->ind = $mostrar_indice; 
$v->render();           //dibujar vista

?>