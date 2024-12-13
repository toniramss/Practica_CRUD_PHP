<?php



require_once('../../config/Database.php');


function selectUsers(){
    $conexion = openBd();

    $sentenciaText = "SELECT * from Users";

    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();

    //Devuelve un array
    $resultado = $sentencia->fetchAll();


    $conexion = closeBd();

    return $resultado;
}

/*function selectUsers(){
    $conexion = openBd();

    $sentenciaText = "SELECT * from Users";

    $sentencia = $conexion->prepare($sentenciaText);
    $sentencia->execute();

    //Devuelve un array
    $resultado = $sentencia->fetchAll();


    $conexion = closeBd();

    return $resultado;
}*/