
<?php

//controllers/eliminar_hamburguesas.php

require '../fw/fw.php';
require '../models/Hamburguesas.php';   //clase hamburguesas
require '../views/BorrarHamburguesas.php';   //clase hamburguesas


$e = new Hamburguesas(); 
$borrar = $e->GetMenu();

$v = new BorrarHamburguesas();     //V de vista
$v->hamburguesas = $borrar; 
$v->render();           //dibujar vista

?>