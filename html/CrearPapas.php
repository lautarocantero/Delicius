
<!--html/crearPapas-->
<?php 
    include '../models/extras/header.php';
?>


<div class="contenedor-formulario-crear">
    <div class="crear-formulario">
        <div class="crear-imagen">
            <div class="crear-overlay">
                <h3 class="crear-subtitulo">¿Qué estas cocinando?</h3>
            </div>

                <form action="" method="GET" class="formulario crear-comida-formulario">
                    <label for="nombre">nombre</label>
                    <input type="text" id="nombre" name="nombre">
                    <label for="descripcion">descripcion</label>
                    <textarea name="descripcion" id="descripcion" cols="30" rows="10"></textarea>
                    <label for="precio">precio</label>
                    <input type="number" id="precio" name="precio">
                    <label for="imagen">imagen</label>
                    <input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">
                    <input type="submit" value="Crear" class="formulario-submit">
                </form>
                
        </div>
    </div>
</div>  

<?php
    include '../models/extras/footer.php';
?>