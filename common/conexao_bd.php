<?php
$servername = "localhost";
$username = "root";
$password = "1988";
$database = "fseletro";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão ao Banco de dados falhou, verifique sua senha. " . mysqli_connect_error());
}
