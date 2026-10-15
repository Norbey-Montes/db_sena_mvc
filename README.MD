# Sistema de Gestión de Productos - PHP MVC

Proyecto desarrollado en **PHP** bajo la arquitectura **Modelo-Vista-Controlador (MVC)** para la administración de un catálogo de productos.

---

## 📂 Estructura del Proyecto

* **`config/`**: Archivo `Conexion.php` para la conexión a la base de datos leyendo el archivo `.env`.
* **`controllers/`**: `ProductoController.php` maneja la lógica para listar y registrar productos.
* **`models/`**: `Producto.php` contiene las consultas SQL con sentencias preparadas (PDO).
* **`public/`**: Punto de entrada principal (`index.php`) y reglas de enrutamiento (`.htaccess`).
* **`views/`**: Plantillas HTML/PHP para la lista de productos y el formulario de registro.