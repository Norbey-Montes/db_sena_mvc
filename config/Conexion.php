<?php
declare(strict_types=1);

class Conexion
{
    private $host;
    private $port;
    private $db_name;
    private $username;
    private $password;

    public function __construct()
    {
        // Cargar las variables del archivo .env ubicado en la raíz del proyecto
        $env = parse_ini_file(__DIR__ . '/../.env');

        $this->host = $env['DB_HOST'];
        $this->port = $env['DB_PORT'] ?? '3306';
        $this->db_name = $env['DB_NAME'];
        $this->username = $env['DB_USER'];
        $this->password = $env['DB_PASS']; 
    }

    public function getConexion()
    {
        return new PDO(
            "mysql:host={$this->host};port={$this->port};dbname={$this->db_name};charset=utf8mb4",
            $this->username,
            $this->password,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]
        );
    }

    public function conectar()
    {
        return $this->getConexion();
    }
}
?>