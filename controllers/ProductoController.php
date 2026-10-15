<?php
require_once __DIR__ . '/../models/Producto.php';

class ProductoController
{
    private $producto;

    public function __construct()
    {
        $this->producto = new Producto();
    }

    // Muestra la lista de productos
    public function index()
    {
        $productos = $this->producto->obtenerTodos();
        require_once __DIR__ . '/../views/productos/index.php';
    }

    //  Muestra el formulario para crear un producto
    public function crear()
    {
        require_once __DIR__ . '/../views/productos/crear.php';
    }

    // Recibe los datos enviados por POST y solicita guardarlos al modelo
    public function guardar()
    {
        // Se valida directamente que vengan datos en el formulario
        if (!empty($_POST["nombre"]) && !empty($_POST["precio"])) {

            $resultado = $this->producto->guardar($_POST["nombre"], $_POST["precio"]);

            if ($resultado) {
                header("Location: /productos");
            } else {
                echo "Error al registrar el producto.";
            }
        }
    }
}