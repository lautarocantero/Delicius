<?php 
    include '../html/header.php';

    if(count($_GET) > 0){
       $idcliente = $_GET['cliente'];
       $cliente = new Clientes();
       $cliente->EliminarCliente($idcliente);
    }

?>
<div class="contenedor-formulario-eliminar">
    <div class="eliminar-formulario">
        <div class="eliminar-imagen">
            <div class="eliminar-overlay">
                <h3 class="eliminar-subtitulo">¿Qué Deseas Eliminar?</h3>
            </div>

                <form action="" method="GET" class="formulario eliminar-cliente-formulario">
                    <label for="nombre">nombre</label>
                    <select name="cliente" id="cliente">
                                <option disabled="disabled" selected>--Seleccionar--</option>
                        <?php foreach($this->cliente as $clien): ?>
                                <option value="<?=$clien['idcliente']?>"><?=$clien['nombre']?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="submit" value="Eliminar" class="formulario-submit">
                </form>
                
        </div>
    </div>
</div>  

<?php
    include '../html/footer.php';
?>