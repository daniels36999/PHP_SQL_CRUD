<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes y Raices</title>

    <link rel="stylesheet" href="../../build/css/app.css">
</head>

<body>


    <header class="header <?php echo $inicio ? 'inicio' : ''; ?>">
        <div class="contenedor contenido-header">
            <div class="barra">
                <a href="/">
                    <img src="../../build/img/logo.svg" alt="Logo">
                </a>

                <div class="mobile-menu">
                    <img src="../../build/img/barras.svg" alt="Icono Menu">
                </div>
                <div class="derecha">
                    <img class="dark-mode-boton" src="../../build/img/dark-mode.svg">
                    <nav class="navegacion">
                        <a href="../../build/php/nosotros.php">Nosotros</a>
                        <a href="../../build/php/anuncios.php">Anuncios</a>
                        <a href="../../build/php/blog.php">Blog</a>
                        <a href="../../build/php/contacto.php">Contacto</a>
                    </nav>
                </div>
            </div>

            <?php if ($inicio) { ?>
                    <h1>Venta de Casas y Departamentos Exclusivos de Lujo</h1>
            <?php } else { echo ''; } ?> 
 
        </div> <!-- Barra-->
    </header>