<?php
$username = "root";
$password = "";
$servidor = "localhost";
$basededatos = "sistemalumek";

try {
    $conn = new PDO("mysql:host=$servidor;dbname=$basededatos", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    error_reporting(0);
    }
catch(PDOException $e)
    {
    echo "Conexion Fallida: " . $e->getMessage();
    }

    echo hash('sha256',"Pasito22");

?>