
<?php

//controllers/borrar_clientes.php

require '../fw/fw.php';
require '../models/Clientes.php';   //clase hamburguesas en MODEL
require '../views/BorrarClientes.php';   //clase hamburguesas en VIEW


$e = new Clientes(); 
$borrar = $e->GetClientes();

$v = new BorrarClientes();     //V de vista
$v->cliente = $borrar; 
$v->render();           //dibujar vista

?>