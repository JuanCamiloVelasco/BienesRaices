<?php
    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="seccion contenedor">
        <h2>Casas y Apartamentos en venta</h2>

        <?php 
            $limite = 10;
            include 'includes/templates/anuncios.php';
        ?>
        </div><!--.contenido-anuncios-->
    </main>

    <?php incluirTemplate('footer')?>

