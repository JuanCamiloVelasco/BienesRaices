<?php
    require 'includes/funciones.php';
    incluirTemplate('header');
?>
    
    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>

        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp">
            <source srcset="build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="build/img/destacada2.jpg" alt="Imagen de la propiedad">
        </picture>
        
        <p class="informacion-meta">Escrito el <span>20-10-2022</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est omnis dicta possimus nesciunt facere quo reprehenderit, totam cupiditate tenetur neque eveniet, similique cum magnam assumenda accusamus voluptates amet, debitis distinctio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione doloremque veritatis quasi placeat ea vel ex? Beatae similique aliquam deleniti magni, minima libero aut quo, ratione debitis tempora dignissimos unde. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius quis aspernatur commodi, ducimus ipsa illo perferendis! Assumenda eligendi dolorum, amet perferendis labore minima voluptatibus dolores praesentium odio quidem nostrum voluptas! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, inventore. Dolores obcaecati dolorem provident quaerat voluptas atque rerum aperiam debitis quia, aliquam repudiandae nulla quam ullam quibusdam sapiente eum officia.</p>
        </div>

    </main>

    <?php incluirTemplate('footer')?>
