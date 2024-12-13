<?php

    function openBd() {

        $servername = 'localhost';
        $db_name = 'blog_db';
        $username = 'root';
        $password = '';

        $conexion = new PDO("mysql:host=" . $servername . ";dbname=" . $db_name, $username, $password);

        $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $conexion->exec("set names utf8");

        return $conexion;

    }

    function closeBd() {
        return null;
    }


    /*private $host = 'localhost';
    private $db_name = 'blog_db';
    private $username = 'root';
    private $password = '1234';

    public $conn; //Definir conexion

    public function getConnection()
    {
        $this -> conn = null;  // Inicializar conexion

        try {

            //Crear una conexión a la base de datos utilizando PDO
            $this -> conn = new PDO(

                "mysql:host=" . $this->host . ";dbname=" . $this->db_name, 
                $this->username, 
                $this->password

            );
                
            //Configurar la conexión para usar codificación UTF-8
            $this -> conn -> exec("set names utf8");

        } catch (PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }

        return $this -> conn;
    }
}*/