<?php
    require '../../includes/funciones.php';
    incluirTemplate('header',false);
?>


    <main class="contenedor seccion">
        <h1>Nuestro Blog</h1>

        <article class="entrada-blog"><!-- ARTICULO1 -->
            <div class="imagen">
                <picture>
                    <source srcset="../img/blog1.webp" type="image/webp">
                    <source srcset="../img/blog1.jpg" type="image/jpeg">
                    <img loading="lazy" src="../img/blog1.jpg" alt="Imagen Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: 20/10/2024 por: Admin</p>
                    <p>Concejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                </a>
            </div>
        </article>

        <article class="entrada-blog  blog-espacio"><!-- ARTICULO1 -->
            <div class="imagen">
                <picture>
                    <source srcset="../img/blog2.webp" type="image/webp">
                    <source srcset="../img/blog2.jpg" type="image/jpeg">
                    <img loading="lazy" src="..img/blog2.jpg" alt="Imagen Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: 20/10/2024 por: Admin</p>
                    <p>Concejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                </a>
            </div>
        </article>

        <article class="entrada-blog  blog-espacio"><!-- ARTICULO1 -->
            <div class="imagen">
                <picture>
                    <source srcset="../img/blog3.webp" type="image/webp">
                    <source srcset="../img/blog3.jpg" type="image/jpeg">
                    <img loading="lazy" src="../img/blog3.jpg" alt="Imagen Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: 20/10/2024 por: Admin</p>
                    <p>Concejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                </a>
            </div>
        </article>

        <article class="entrada-blog  blog-espacio"><!-- ARTICULO1 -->
            <div class="imagen">
                <picture>
                    <source srcset="../img/blog4.webp" type="image/webp">
                    <source srcset="../img/blog4.jpg" type="image/jpeg">
                    <img loading="lazy" src="../img/blog4.jpg" alt="Imagen Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p>Escrito el: 20/10/2024 por: Admin</p>
                    <p>Concejos para construir una terraza en el techo de tu casa con los mejores materiales y ahorrando dinero</p>
                </a>
            </div>
        </article>


    </main>

    <?php
    incluirTemplate('footer');
?>
