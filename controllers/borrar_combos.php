<?php

//controllers/eliminar_combos.php

require '../fw/fw.php';
require '../models/Combos.php';   //
require '../views/BorrarCombos.php';   //


$e = new Combos(); 
$borrar = $e->GetMenu();

$v = new BorrarCombos();     //V de vista
$v->combos = $borrar; 
$v->render();           //dibujar vista

?>