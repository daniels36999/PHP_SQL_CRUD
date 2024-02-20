<?php
    require 'includes/funciones.php';
    incluirTemplate('header',$inicio = true);
?>

    <main class="contenedor seccion">
        <h1>Más sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">  <!-- icono1-->
                <img src="build/img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae est dolorum eum, quae aperiam quo odio possimus facilis laudantium? Tenetur, similique? Numquam magni possimus deleniti, hic necessitatibus dolorem dolores voluptates!</p>
            </div>

            <div class="icono">  <!-- icono1-->
                <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Précio</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae est dolorum eum, quae aperiam quo odio possimus facilis laudantium? Tenetur, similique? Numquam magni possimus deleniti, hic necessitatibus dolorem dolores voluptates!</p>
            </div>

            <div class="icono">  <!-- icono1-->
                <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae est dolorum eum, quae aperiam quo odio possimus facilis laudantium? Tenetur, similique? Numquam magni possimus deleniti, hic necessitatibus dolorem dolores voluptates!</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <?php 

            $limite = 6;
            include 'includes/templates/anunciosbd.php';
        ?>

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">  
        <h2>Encuentra la casa de tus Sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad</p>
        <a href="/build/php/contacto.php" class="boton-amarillo">Contactanos</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

            <article class="entrada-blog"><!-- ARTICULO1 -->
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog1.webp" type="image/webp">
                        <source srcset="build/img/blog1.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog1.jpg" alt="Imagen Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="build/php/entrada.php">
                        <h4>Terraza en el techo de tu casa</h4>
                        <p>Escrito el: <span>20/10/2024</span> por: <span>Admin</span></p>
                        <p>Concejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                    </a>
                </div>
            </article>

            <article class="entrada-blog"><!-- ARTICULO2 -->
                <div class="imagen">
                    <picture>
                        <source srcset="build/img/blog2.webp" type="image/webp">
                        <source srcset="build/img/blog2.jpg" type="image/jpeg">
                        <img loading="lazy" src="build/img/blog2.jpg" alt="Imagen Blog">
                    </picture>
                </div>

                <div class="texto-entrada">
                    <a href="build/php/entrada.php">
                        <h4>Guía para decorar tu hogar</h4>
                        <p>Escrito el: <span>21/12/2024</span> por: <span>Admin</span></p>
                        <p>Maximiza el espacio en tu hogar con esta guía, aprende a combinar muebles y colores para darle vida a tu espacio</p>
                    </a>
                </div>
            </article>

        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>
                    El personal se comporto de una excelente forma, muy buena la atención y la casa que me ofrecieron cumple con todas mis espectativas
                </blockquote> 
                <p>- Daniels Yautibug</p>
            </div>
            

        </section>
    </div>

<?php
    incluirTemplate('footer');
?>
