<?php
    require '../../includes/funciones.php';
    incluirTemplate('header',false);
?>

    <main class="contenedor seccion">
        <h1>Conoce sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source src="../img/nosotros.webp" type="image/webp">
                    <source src="../img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="../img/nosotros.jpg" alt="imagen de Nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>    
                    25 Años de experiencia
                </blockquote>
                <p>
                    Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae. In dictum felis et nunc aliquet molestie. Proin tristique commodo felis, sed auctor elit auctor pulvinar. Nunc porta, nibh quis convallis sollicitudin, arcu nisl semper mi, vitae sagittis lorem dolor non risus. Vivamus accumsan maximus est, eu mollis mi. Proin id nisl vel odio semper hendrerit. Nunc porta in justo finibus tempor. Suspendisse lobortis dolor quis elit suscipit molestie. Sed condimentum, erat at tempor finibus, urna nisi fermentum est, a dignissim nisi libero vel est. Donec et imperdiet augue. Curabitur malesuada sodales congue. Suspendisse potenti. Ut sit amet convallis nisi. 
                </p>
                <p>
                    Aliquam lectus magna, luctus vel gravida nec, iaculis ut augue. Praesent ac enim lorem. Quisque ac dignissim sem, non condimentum orci. Morbi a iaculis neque, ac euismod felis. Fusce augue quam, fermentum sed turpis nec, hendrerit dapibus ante. Cras mattis laoreet nibh, quis tincidunt odio fermentum vel. Nulla facilisi.
                </p>

            </div>

        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Más sobre Nosotros</h1>
        <div class="iconos-nosotros">
            <div class="icono">  <!-- icono1-->
                <img src="../img/icono1.svg" alt="Icono Seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae est dolorum eum, quae aperiam quo odio possimus facilis laudantium? Tenetur, similique? Numquam magni possimus deleniti, hic necessitatibus dolorem dolores voluptates!</p>
            </div>

            <div class="icono">  <!-- icono1-->
                <img src="../img/icono2.svg" alt="Icono Precio" loading="lazy">
                <h3>Précio</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae est dolorum eum, quae aperiam quo odio possimus facilis laudantium? Tenetur, similique? Numquam magni possimus deleniti, hic necessitatibus dolorem dolores voluptates!</p>
            </div>

            <div class="icono">  <!-- icono1-->
                <img src="../img/icono3.svg" alt="Icono Tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae est dolorum eum, quae aperiam quo odio possimus facilis laudantium? Tenetur, similique? Numquam magni possimus deleniti, hic necessitatibus dolorem dolores voluptates!</p>
            </div>
        </div>
    </section >

    <?php
    incluirTemplate('footer');
?>
