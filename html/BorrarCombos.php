<?php 
    include '../html/header.php';

    if(count($_GET) > 0){
       $idcombos = $_GET['combo'];
       $combo = new Combos();
       $combo->BorrarCombos($idcombos);
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
                    <select name="combo" id="combo">
                                <option disabled="disabled" selected>--Seleccionar--</option>
                        <?php foreach($this->combos as $comb): ?>
                                <option value="<?=$comb['idcombo']?>"><?=$comb['nombre']?></option>
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