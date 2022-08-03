<?php
    require 'includes/app.php';
    incluirTemplate('header');
?>
    
    <main class="contenedor seccion">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazr" src="build/img/nosotros.jpg" alt="Imagen sobre nosotros">
                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>
                    25 años de experiencia
                </blockquote>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est omnis dicta possimus nesciunt facere quo reprehenderit, totam cupiditate tenetur neque eveniet, similique cum magnam assumenda accusamus voluptates amet, debitis distinctio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione doloremque veritatis quasi placeat ea vel ex? Beatae similique aliquam deleniti magni, minima libero aut quo, ratione debitis tempora dignissimos unde. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius quis aspernatur commodi, ducimus ipsa illo perferendis! Assumenda eligendi dolorum, amet perferendis labore minima voluptatibus dolores praesentium odio quidem nostrum voluptas! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, inventore. Dolores obcaecati dolorem provident quaerat voluptas atque rerum aperiam debitis quia, aliquam repudiandae nulla quam ullam quibusdam sapiente eum officia.</p>
            </div>
        </div>
        
    </main>

    <section class="contenedor seccion">
        <h1>Mas sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias tenetur ea, aperiam, delectus dignissimos ab voluptas voluptates doloremque error fugit labore dolorem nostrum eos, soluta nihil maiores quod iusto facere.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias tenetur ea, aperiam, delectus dignissimos ab voluptas voluptates doloremque error fugit labore dolorem nostrum eos, soluta nihil maiores quod iusto facere.</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias tenetur ea, aperiam, delectus dignissimos ab voluptas voluptates doloremque error fugit labore dolorem nostrum eos, soluta nihil maiores quod iusto facere.</p>
            </div>
        </div>
    </section>
    
    <?php incluirTemplate('footer')?>

