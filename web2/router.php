<?php
require_once 'app/controllers/products.controller.php';

// leemos la accion que viene por parametro
$action = 'home'; // acción por defecto

if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'products':
        $productController = new productsController();
        $productController->showProducts();
        break;
    default:
        echo('404 Page not found');
        break;
}
