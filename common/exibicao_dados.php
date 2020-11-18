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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>

<body>

  <center>
    <nav class="navbar bg-warning ">
      <div class="container">
        <a href="Index.php"><img src="img/logo/Logo.png" alt="Full Stack Eletro" id="imagem"></a>
        <a href="Produtos.php" class="text-primary">
          Nossos produtos
        </a>
        <a href="Lojas.php" class="text-primary">
          Nossas Lojas
        </a>
        <a href="Contato.php" class="text-primary">
          Fale conosco
        </a>
      </div>
    </nav>
  </center>

  <br>

  <div class="container-fluid">
    <?php
    $sql = "select * from comentarios";
    $result = $conn->query($sql);


    while ($rows = $result->fetch_assoc()) {

      echo "Data: " . $rows['data'] . "<br>";
      echo "Nome: " . $rows['nome'] . "<br>";
      echo "Mensagem: " . $rows['msg'] . "<br><hr>";
    }

    ?>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>