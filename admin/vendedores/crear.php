<?php

require '../../includes/app.php';

use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;

estadoAutenticado();

$vendedor = new Vendedor;

//Arreglo con mensajes de errores
$errores = Vendedor::getErrores();

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    //Crear una nueva instancia
    $vendedor = new Vendedor($_POST['vendedor']);

    /** SUBIDA DE ARCHIVOS */
    // Generar un nombre unico
    $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

    // Setear la imagen
    //Realiza un rezice a la imagen con intervention
    if($_FILES['vendedor']['tmp_name']['imagen']) {
        $image = Image::make($_FILES['vendedor']['tmp_name']['imagen'])->fit(800,600);
        $vendedor->setImagen($nombreImagen);
    }

    //Validar que no haya campos vacios
    $errores = $vendedor->validar();

    

    if (empty($errores)) {

        //Crear carpeta para subir imagenes
        if(!is_dir(CARPETA_IMAGENES)) {
            mkdir(CARPETA_IMAGENES);
        }

        //Guarda la imagen en el servidor
        $image->save(CARPETA_IMAGENES . $nombreImagen);

        
        $vendedor->guardar();
    }

}


incluirTemplate('header');

?>

<main class="contenedor seccion">
        <h1>Registrar vendedor(a)</h1>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>    
            
        <?php endforeach ?>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <form class="formulario" method="POST" action="/admin/vendedores/crear.php" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_vendedores.php'; ?>

            <input type="submit" value="Registrar Vendedor(a)" class="boton boton-verde">

        </form>

    </main>

<?php
    incluirTemplate('footer');
?>