<?php
include('conexao_bd.php');
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale conosco</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
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

    <br><br>

    <section class="container">
        <center>
            <div class="row">
                <hr>
                <div>
                    <img src="img/Email/Email.png" ALT="EMAIL" width="50px">
                    <p class="text-dark"><strong>Fullstackeletro@gmail.com</strong></p>
                </div>
                <hr>
                <div>
                    <img src="img/telefone/Telefone.png" ALT="Telefone" width="50px">
                    <P class="text-dark"><strong>(21) 95858-6565</strong></P>
                </div>
                <hr>
            </div>
        </center>
    </section>

    <br><br><br><br><br><br>

    <center>
        <div class="container">
            <form method="post" action="">
                <div class="text-dark">
                    <h4 style="font-size:17px"><strong>Nome:</strong></h4>
                    <input type="text" name="nome">
                    <h4 style="font-size:17px"><strong>mensagem:</strong></h4>
                    <input type="text" name="msg"><br><br>
                    <input type="submit" name="submit" value="Enviar" class="btn-primary" style="font-size:18px"><br>
                </div>
            </form>
        </div>
    </center>
    <br><br>

    <center>
        <?php
        if (isset($_POST['nome']) && isset($_POST['msg'])) {

            echo "Dados Recebidos com sucesso! <br>";

            $nome = $_POST['nome'];
            $msg = $_POST['msg'];
            $data = $_POST['data'];

            $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
            $result = $conn->query($sql);

            if ($result) {
                echo "Dados inseridos com sucesso!";
                header("Refresh:4; exibicao_dados.php");
            } else {
                echo "Dados não inseridos!";
            }
        }
        ?>
    </center>

    <br><br>
    <br><br>
    <br><br>

    <center>
        <footer>
            <strong>
                <p>Formas de pagamento</p>
            </strong>
            <img src="img/Formasdepagamento.webp" width="250" height="100">
            <p class="bg-warning" style="font-size: 12px"><strong> &copy; Recode Pro</p></strong>
        </footer>
    </center>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>