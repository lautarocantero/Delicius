<!--/html/ListadoBebidas.php-->
<?php 
    include '../html/header.php';
?>


    <h2 class="subtitulo-cliente">Conoce a nuestros clientes    </h2>
    <a href="nuevo-cliente">Crear Cuenta</a>
    <a href="eliminar-cliente">Borrar Cuenta</a>
    <div class="clientes">
        <?php foreach($this->clientes as $cli): ?>
            <div class="cliente">
                <p class="nombre">Nombre: <?=$cli['nombre']?></p>
                <p class="mail">Email: <?=$cli['email']?></p>
                <p class="telefono">Telefono: <?=$cli['telefono']?></p>
                <p class="direccion">Direccion: <?=$cli['direccion']?></p>
    
            </div>
            <?php endforeach; ?>
        </div>
    </div>

<?php
    include '../html/footer.php';
?>