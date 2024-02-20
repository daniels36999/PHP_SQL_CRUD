<?php
    require '../../includes/funciones.php';
    incluirTemplate('header',false);
?>

<!--  -->

    <main class="contenedor seccion">

        <h2>Casas y Depas en Venta</h2>

        <?php 
            $limite = 10;
            include '../../includes/templates/anunciosbd.php';
        ?>
    </main>

<!--  -->
<?php
    incluirTemplate('footer');
?>
