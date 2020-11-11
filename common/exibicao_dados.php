<?php
include_once("conexao_bd.php");
?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nossos produtos</title>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <script src="js/scripts.js"></script>
</head>

<body>
  <?php
  include_once('menu.html');
  ?>

  <br>

  <?php
  $sql = "select * from comentarios";
  $result = $conn->query($sql);


  while ($rows = $result->fetch_assoc()) {

    echo "Data: " . $rows['data'] . "<br>";
    echo "Nome: " . $rows['nome'] . "<br>";
    echo "Mensagem: " . $rows['msg'] . "<br><hr>";
  }

  ?>

</body>