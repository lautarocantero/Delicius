<?php

//controllers/borrar_papas.php

require '../fw/fw.php';
require '../models/Papas.php';   //clase papas de MODELS
require '../models/ValidarExcepsion.php';
require '../views/BorrarPapas.php';   //clase Papas


$e = new Papas(); 
$borrar = $e->GetMenu();

$v = new BorrarPapas();     //V de vista
$v->papas = $borrar; 
$v->render();           //dibujar vista

?>