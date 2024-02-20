<?php

    //----------------------------------------
    require '../../includes/funciones.php';
    //BASE DE DATOS

    require '../../includes/config/database.php';
    $db = conectarDB();

    // Validar la URL por ID válido
    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /admin');
    }

    // Consultar para obtener los vendedores
    $consultaAc = "SELECT * FROM propiedades WHERE id = $id";
    $resultadoAc = mysqli_query($db, $consultaAc);
    $propiedad = mysqli_fetch_assoc($resultadoAc);

    // Consultar para obtener los vendedores
    $consulta = "SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores
    $errores = [];

    $titulo = $propiedad ['titulo'];
    $precio = $propiedad ['precio'];
    $descripcion = $propiedad ['descripcion'];
    $habitaciones = $propiedad ['habitaciones'];
    $banos = $propiedad ['bano'];
    $estacionamiento = $propiedad ['estacionamiento'];
    $vendedorId = $propiedad ['vendedores_id'];
    $imagenPropiedad = $propiedad['imagen'];

    // Ejecutar el código después de que el usuario envia el formulario
    if($_SERVER['REQUEST_METHOD']==='POST'){

        // echo "<pre>";
        //     var_dump($_POST);
        // echo "</pre>";

        //TOMA LOS VALORES DEL FORMULACIO CON EL POST
        $titulo = mysqli_real_escape_string( $db,$_POST['titulo']);
        $precio = mysqli_real_escape_string( $db,$_POST['precio']);
        $descripcion = mysqli_real_escape_string( $db,$_POST['descripcion']);
        $habitaciones = mysqli_real_escape_string( $db,$_POST['habitaciones']);
        $banos = mysqli_real_escape_string( $db,$_POST['banos']);
        $estacionamiento= mysqli_real_escape_string( $db,$_POST['estacionamiento']);
        $vendedorId = mysqli_real_escape_string( $db,$_POST['vendedor']);
        $creado = date('Y/m/d');
        // Asignar files hacia una variable
        $imagen = $_FILES['imagen'];
        //$vendedorStr= $_POST['vendedor'];

        //PONE LAS VARIABLES NUMERICAS AL FORMATO DE LA bASE DE DATOS
        // $precio = ($precioString === '') ? 'NULL' : floatval($precioStr);
        // $habitaciones= ($habitacionesStr === '') ? 'NULL' : intval($habitacionesStr);
        // $banos = ($banosStr === '') ? 'NULL' : intval($banosStr);
        // $estacionamiento = ($estacionamientoStr === '') ? 'NULL' : intval($estacionamientoStr);

   



        if(!$titulo) {
            $errores[] = "Debes añadir un titulo";
        }

        if(!$precio) {
            $errores[] = 'El Precio es Obligatorio';
        }

        if( strlen( $descripcion ) < 20 ) {
            $errores[] = 'La descripción es obligatoria y debe tener al menos 50 caracteres';
        }

        if(!$habitaciones) {
            $errores[] = 'El Número de habitaciones es obligatorio';
        }
        
        if(!$banos) {
            $errores[] = 'El Número de Baños es obligatorio';
        }

        if(!$estacionamiento) {
            $errores[] = 'El Número de lugares de Estacionamiento es obligatorio';
        }
        
        if(!$vendedorId) {
            $errores[] = 'Elige un vendedor';
        }

        // if(!$imagen['name'] || $imagen['error'] ) {
        //     $errores[] = 'La Imagen es Obligatoria';
        // }

        // Validar por tamaño (1mb máximo)
        $medida = 1000 * 1000;


        if($imagen['size'] > $medida ) {
            $errores[] = 'La Imagen es muy pesada';
        }

                // Revisar que el array de errores este vacio

        if(empty($errores)) {

            /** SUBIDA DE ARCHIVOS */

            // Crear carpeta
            $carpetaImagenes = '../../imagenes/';

            if(!is_dir($carpetaImagenes)) {
                mkdir($carpetaImagenes);
            }

            $nombreImagen = '';

            // echo "<pre>";
            //     var_dump($imagen['name']);
            // echo "</pre>";
            //exit;

            /** SUBIDA DE ARCHIVOS */
            if ($imagen['name']){

            
                unlink($carpetaImagenes . $propiedad['imagen']);

                // // Generar un nombre único
                $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

                // // Subir la imagen
                move_uploaded_file($imagen['tmp_name'], $carpetaImagenes . $nombreImagen );
            } else {
                $nombreImagen = $propiedad['imagen'];
            }

            //INSERTAMOS EL COMANDO DE SQL PARA AÑADIR
            $query = " UPDATE propiedades SET titulo = '$titulo', precio = $precio, imagen = '$nombreImagen', descripcion = '$descripcion', habitaciones = $habitaciones, bano = $banos, estacionamiento = $estacionamiento, vendedores_id = $vendedorId WHERE id = $id ";
            
            
            // echo "<pre>";
            //     echo $query;
            // echo "</pre>";
            // exit;

            //AÑADIMOS A MYSQLI
            $resultado = mysqli_query($db, $query);

            if($resultado) {
                // Redireccionar al usuario.
                header('Location: /admin?resultado=2');
            }
        }
    }



    incluirTemplate('header',false);
?>


    <main class="contenedor seccion">
        <h1>Actualizar</h1>
        <a href="../index.php" class="boton boton-verde"> Volver </a>
    
        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
        <?php endforeach; ?>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend>Información General</legend>

                <label for="titulo">Título de la Propiedad</label>
                <input type="text" id="titulo" name="titulo" placeholder="Título Propiedad" value="<?php echo $titulo; ?>">

                <label for="precio">Precio de la Propiedad</label>
                <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

                <label for="imagen">Imagen:</label>
                <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">
                <img src="/imagenes/<?php echo $imagenPropiedad; ?>" class="imagen-small">

                <label for="descripcion">Descripcioón</label>
                <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>
            </fieldset>

            <fieldset>
                <legend>Información Propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" name="habitaciones" placeholder="Eje: 4" min="1" max="10" value="<?php echo $habitaciones; ?>">

                <label for="banos">Baños</label>
                <input type="number" id="banos" name="banos" placeholder="Eje: 4" min="1" max="10" value="<?php echo $banos; ?>">

                <label for="estacionamiento">Estacionamiento</label>
                <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Eje: 4" min="1" max="10" value="<?php echo $estacionamiento; ?>">

            </fieldset>

            <fieldset>
                <legend>Información Vendedor</legend>
                <select name="vendedor">
                    <option value="" disabled selected>-- Seleccione el Vendedor --</option>
                    <?php while($vendedor =  mysqli_fetch_assoc($resultado) ) : ?>
                        <option  <?php echo $vendedorId === $vendedor['id'] ? 'selected' : ''; ?>   value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?> </option>
                    <?php endwhile; ?>
                </select>
            </fieldset>

            <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php

    // Cerrar la conexion
    mysqli_close($db);

    incluirTemplate('footer');
?>
