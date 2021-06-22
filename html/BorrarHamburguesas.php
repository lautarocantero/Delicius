<?php 
    include '../models/extras/header.php';

    if(count($_GET) > 0){
       $idhamburguesa = $_GET['hamburguesa'];
       $hamburguesa = new Hamburguesas();
       $hamburguesa->BorrarHamburguesa($idhamburguesa);
    }

?>
<div class="contenedor-formulario-eliminar">
    <div class="eliminar-formulario">
        <div class="eliminar-imagen">
            <div class="eliminar-overlay">
                <h3 class="eliminar-subtitulo">¿Qué Deseas Eliminar?</h3>
            </div>

                <form action="" method="GET" class="formulario eliminar-comida-formulario">
                    <div class="imagen-comida" id="imagen-comida"> <!--imagen-->
                    </div>
                    <label for="nombre">nombre</label>
                    <select name="hamburguesa" id="hamburguesa">
                                <option disabled="disabled" selected>--Seleccionar--</option>
                        <?php foreach($this->hamburguesas as $comida): ?>
                                <option value="<?=$comida['idhamburguesa']?>"><?=$comida['nombre']?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type="submit" value="Eliminar" class="formulario-submit">
                </form>
                
        </div>
    </div>
</div>  

<?php
    include '../models/extras/footer.php';
?>