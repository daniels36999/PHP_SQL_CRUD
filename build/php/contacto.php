<?php
    require '../../includes/funciones.php';
    incluirTemplate('header',false);
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>
        <picture>
            <source srcset="../img/destacada3.webp" type="image/webp">
            <source srcset="../img/destacada3.jpg" type="image/jpeg">
            <img src="../img/destacada3.jpg" alt="Imagen destacad 3" loading="lazy">
        </picture>

        <h2>Llene el formulario</h2>
        <form class="formulario">
            <fieldset>  <!-- FORMULARIO 1-->
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="apellido">Apellido</label>
                <input type="text" placeholder="Tu Apellido" id="apellido">

                <label for="email">E-mail</label>
                <input type="email" placeholder="Tu E-mail" id="email">

                <label for="telefono">Teléfono</label>
                <input type="tel" placeholder="Tu Teléfono" id="telefono">

                <label for="mensaje">Mensaje</label>
                <textarea id="mensaje" placeholder="Escribenos..."></textarea>
            </fieldset>

            <fieldset>  <!-- FORMULARIO 2-->
                <legend>Información Sobre la Propiedad</legend>

                <label for="opciones">Vende o Compra</label>
                <select id="opciones">
                    <option value="" disabled selected>--Seleccione--</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Precio o Presupuesto</label>
                <input type="number" placeholder="Tu Precio o Presupuesto" id="apellido">
            </fieldset>

            <fieldset>  <!-- FORMULARIO 2-->
                <legend>Información Sobre Contactar</legend>
                    <p>Como desea ser contactado</p>
                    <div class="forma-contacto">
                        <label for="contactar-telefono">Teléfono</label>
                        <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                        <label for="contactar-email">E-mail</label>
                        <input name="contacto" type="radio" value="email" id="contactar-email">
                    </div>

                    <p>Si eligió teléfono, elija la fecha y la hora</p>
                    <label for="fecha">Fecha:</label>
                    <input type="date" id="fecha">

                    <label for="hora">Hora:</label>
                    <input type="time" id="hora" min="09:00" max="18:00">

            </fieldset>
            <input type="submit" value="Enviar" class="boton-verde">
        </form>

    </main>

    <?php
    incluirTemplate('footer');
?>
