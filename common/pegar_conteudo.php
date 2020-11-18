<?php
$servername = "localhost";
$username = "root";
$password = "1988";
$database = "fseletro";
$tabela = $_GET['table'];

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão ao Banco de dados falhou, verifique sua senha. " . mysqli_connect_error());
}

$sql = "select * from $tabela";
$result = $conn->query($sql);

print_r(json_encode($result->fetch_all(MYSQLI_ASSOC)));

mysqli_close($conn);
?>
