<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "usuarios_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>
