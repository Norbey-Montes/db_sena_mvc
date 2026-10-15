<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
</head>
<body>
    <h1>Registrar Nuevo Producto</h1>

    <!-- Formulario enviado mediante POST a /productos -->
    <form action="/productos" method="POST">
        <p>
            <label for="nombre">Nombre:</label>
            <input 
                type="text" 
                id="nombre" 
                name="nombre" 
                placeholder="Ingrese el nombre" 
                required
            >
        </p>
        <p>
            <label for="precio">Precio:</label>
            <input 
                type="number" 
                step="0.01" 
                id="precio" 
                name="precio" 
                placeholder="Ingrese el precio" 
                required
            >
        </p>
        <p>
            <button type="submit">Guardar</button>
        </p>
    </form>

    <br>
    <a href="/productos">Volver al listado</a>
</body>
</html>