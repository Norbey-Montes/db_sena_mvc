<?php
require_once __DIR__ . '/../config/Conexion.php';

class Producto
{
    private $conexion;

    public function __construct()
    {
        $db = new Conexion();
        $this->conexion = $db->getConexion();
    }

    // Registro de producto usando prepare(), bindParam() y execute()
    public function guardar($nombre, $precio)
    {
        $sql = "INSERT INTO productos (nombre, precio) VALUES (:nombre, :precio)";
        
        $consulta = $this->conexion->prepare($sql);
        
        $consulta->bindParam(":nombre", $nombre);
        $consulta->bindParam(":precio", $precio);
        
        return $consulta->execute();
    }

    // Método auxiliar para obtener la lista de productos
    public function obtenerTodos()
    {
        $sql = "SELECT * FROM productos";
        $consulta = $this->conexion->prepare($sql);
        $consulta->execute();
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}