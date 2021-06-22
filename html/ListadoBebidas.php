<!--/html/ListadoBebidas.php-->
<?php 
    include '../models/extras/header.php';
?>

<div class="opciones_comida">
    <ul class="lista-opciones">
        <li><a href="crear_bebidas.php" class="link-opcion opcion-crear">Crear</a></li>
        <li><a href="borrar_bebidas.php" class="link-opcion opcion-eliminar">Eliminar</a></li>
    </ul>
</div>

<div class="productos-expositorio">

<div class="navegador-productos">
        <ul class="lista-productos">
            <li class="item-navegador-productos">
                <div class="link-productos ham">
                    <a href="lista_hamburguesas.php">
                        <img src="../fw/img/hamburguesa-3.png" alt="hamburguesa" class="link-hamburguesa">
                        <p class="link-texto">Hamburguesas</p>
                    </a>
                </div>
            </li>
            <li class="item-navegador-productos">
                <div class="link-productos beb">
                    <a href="lista_bebidas.php">
                        <img src="../fw/img/bebida.png" alt="bebida" class="link-bebida">
                        <p class="link-texto">Bebida</p>
                    </a>
                </div>
            </li>
            <li class="item-navegador-productos pap">
                <div class="link-productos">
                    <a href="lista_papas.php">
                        <img src="../fw/img/papas.png" alt="papas" class="link-papas">
                        <p class="link-texto">Papas y Complementos</p>
                    </a>
                </div>
            </li>
            <li class="item-navegador-productos pap">
                <div class="link-productos">
                    <a href="lista_combos.php">
                        <img src="../fw/img/combo-1.png" alt="papas" class="link-combo">
                        <p class="link-texto">Combos</p>
                    </a>
                </div>
            </li>
        </ul>
    </div>

    <div class="productos">
    <?php foreach($this->bebidas as $beb): ?>
        <div class="producto">
            <img src="../fw/img/<?=$beb['imagen']?>" alt="imagen" class="producto-imagen">
            <div class="producto-informacion">
                <h4 class="producto-nombre"> <?= $beb['nombre'];  ?></h4>
                <p class="producto-precio"> <?= $beb['precio'];  ?>$</p>
                <!-- <p class="producto-precio"> <?= $resultado['idbebida'];  ?>$</p> -->
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    
</div>

<?php
    include '../models/extras/footer.php';
?>