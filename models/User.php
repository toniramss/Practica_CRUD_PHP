<?php

namespace models;

use config\Database;
use PDO;
use PDOException;

require_once 'Database.php';  // Incluir la clase Database
require_once 'User.php';  // Incluir la clase User

class User
{
    private $userName;
    private $name;
    private $surname;
    private $email;
    private $password;
    private $idRole;


    // Propiedades del usuario (id, username, email, etc.)
    public function __construct($userName, $name, $surname, $email, $password, $idRole)
    {
        $this->userName = $userName;
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->idRole = $idRole;

    }
    public function _construct()
    {
    

    }



    // Métodos CRUD para el usuario (create, read, update, delete)
    public function getAllUsers()
    {
        //Crear instancia de la clase "Database.php"
        $conn = new DataBase();

        //Llamar a la funcion de la clase
        $dbConnection = $conn->getConnection();

        // Chequear conexión
        /*if ($dbConnection->connect_error) {
            die("Conexión fallida: " . $dbConnection->connect_error);
        }*/

        //Consulta SQL
        $query = "SELECT idUser, userName, name, surname, email, password, idRole FROM Users";

        // Preparar sentencia
        $stmt = $dbConnection->prepare($query);

        // Ejecutar sentencia
        $stmt->execute();

        // Establecer el modo de fetch a asociativo
        $stmt->setFetchMode(PDO::FETCH_ASSOC);


        $usersList = [];
        // Recorrer cada fila de resultados
        /*while ($row = $stmt->fetch()) {

            $user = new User($row["userName"], $row["name"], $row["surname"], $row["email"], $row["password"], $row["idRole"]);

            $usersList[] = $user; 
            
        }*/

        //Cerrar conexion
        $dbConnection = null;

        return $stmt;

    }
}