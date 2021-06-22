
<?php

//controllers/borrarr_bebidas.php

require '../fw/fw.php';
require '../models/Bebidas.php';   //clase hamburguesas en MODEL
require '../views/BorrarBebidas.php';   //clase hamburguesas en VIEW


$e = new Bebidas(); 
$borrar = $e->GetMenu();

$v = new BorrarBebidas();     //V de vista
$v->bebidas = $borrar; 
$v->render();           //dibujar vista

?>