<?php
require_once __DIR__ . '/../controllers/ProductoController.php';

$method = $_SERVER["REQUEST_METHOD"];
$uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if ($method === "GET" && ($uri === "/productos" || $uri === "/")) {
    $controller = new ProductoController();
    $controller->index();
} else {
    if ($method === "GET" && $uri === "/productos/crear") {
        $controller = new ProductoController();
        $controller->crear();
    } else {
        if ($method === "POST" && $uri === "/productos") {
            $controller = new ProductoController();
            $controller->guardar();
        } else {
            echo "<h1>404 - Página no encontrada</h1>";
            echo "<p>Ruta solicitada: " . $uri . "</p>";
        }
    }
}