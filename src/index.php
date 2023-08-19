<?php
// Enrutador básico
function routeHandler($route)
{
    if ($route === '/') {
        // Mostrar la página de inicio que esta en vistas/login.php
        require __DIR__ . '/vistas/login.php';
    } elseif ($route === '/home') {
        echo "Esta es la página de información acerca de nosotros.";
    } 
}

// Obtener la ruta actual de la solicitud (usando la variable $_SERVER['REQUEST_URI'])
$current_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Manejar la ruta
routeHandler($current_uri);
?>
