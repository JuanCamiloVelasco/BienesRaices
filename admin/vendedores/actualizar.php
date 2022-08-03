<?php

require '../../includes/app.php';

use App\Vendedor;
use Intervention\Image\ImageManagerStatic as Image;

estadoAutenticado();

//Validar que el id sea valido

$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id) {
    header('Location: /admin');
}

//Obtener el arreglo del vendedor
$vendedor = Vendedor::find($id);

//Arreglo con mensajes de errores
$errores = Vendedor::getErrores();

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    //Asignar los valores
    $args = $_POST['vendedor'];

    $vendedor->sincronizar($args);

    //Sincronizar objeto en memoria con lo que el usuario escribio
    $errores = $vendedor->validar();

    // Generar un nombre unico
    $nombreImagen = md5( uniqid( rand(), true ) ) . ".jpg";

    if($_FILES['vendedor']['tmp_name']['imagen']) {
        $image = Image::make($_FILES['vendedor']['tmp_name']['imagen'])->fit(800,600);
        $vendedor->setImagen($nombreImagen);
    }

    if(empty($errores)) {

        if($_FILES['vendedor']['tmp_name']['imagen']) {
            //Guarda la imagen en el servidor
            $image->save(CARPETA_IMAGENES . $nombreImagen);
        }


        $vendedor->guardar();
    }
}


incluirTemplate('header');

?>

<main class="contenedor seccion">
        <h1>Actualizar Vendedor(a)</h1>

        <?php foreach($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error ?>
        </div>    
            
        <?php endforeach ?>

        <a href="/admin" class="boton boton-verde">Volver</a>

        <form class="formulario" method="POST" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_vendedores.php'; ?>

            <input type="submit" value="Guardar Cambios" class="boton boton-verde">

        </form>

    </main>

<?php
    incluirTemplate('footer');
?>