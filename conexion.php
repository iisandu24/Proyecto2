<?php

//definir variables de conexion


function conectar_bd(){

$servidor = "localhost";
$bd = "nueva_bd_proyecto";
$usuario = "root";
$pass = "";

//definir la conexion usando las variables.

$conn = mysqli_connect($servidor, $usuario, $pass, $bd);


// Comprobar la conexión
if (!$conn) {
    die("Error de conexion " . mysqli_connect_error());
}
// echo "Conectado correctamente <hr>";

//devuelvo la conexion
return $conn;

}


$con= conectar_bd();