<?php

define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');
define('CARPETA_IMAGENES', __DIR__ . '/../imagenes/');
define('CARPETA_VENDEDORES', __DIR__ . '/../VendedoresIMG/');

function incluirTemplate( string $nombre, bool $inicio = false ) {
    include TEMPLATES_URL . "/${nombre}.php";
}

function estadoAutenticado() {
    session_start();

    if (!$_SESSION['login']) {
        header('Location: /');
    }
}

function debugear($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapar / sanitizar el HTML
function s($html) :string {
    $s = htmlspecialchars($html);
    return $s;
}

//Validar tipo de contenido
function validarTipoContenido($tipo) {
    $tipos = ['vendedor', 'propiedad'];

    return in_array($tipo, $tipos);
}

//muestra los mensajes
function mostrarNotificacion($codigo) {
    $mensaje = '';

    switch($codigo) {
        case 1:
            $mensaje = 'Propiedad Creada Correctamente';
            break;
        case 2:
            $mensaje = 'Propiedad Actualizada Correctamente';
            break;
        case 3:
            $mensaje = 'Propiedad Eliminada Correctamente';
            break;
        case 4:
            $mensaje = 'Vendedor(a) Cread(a) Correctamente';
            break;
        case 5:
            $mensaje = 'Vendedor(a) Actualizad(a) Correctamente';
            break;
        case 6:
            $mensaje = 'Vendedor(a) Eliminad(a) Correctamente';
            break;
        default:
            $mensaje = false;  
            break; 
    }
    return $mensaje;
}