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
</head>

<body>

    <?php
    include_once('menu.html');
    ?>

    <hr>

    <section id="icones">
        <div id="email">
            <img src="img/Email/Email.png" ALT="EMAIL" width="50px">
            <p>Fullstackeletro@gmail.com</p>
        </div>
        <div id="telefone">
            <img src="img/telefone/Telefone.png" ALT="Telefone" width="50px">
            <P>(21) 95858-6565</P>
        </div>
    </section>

    <br><br>

    <form class="form" method="post" action="">
        <h4>Nome:</h4>
        <input type="text" name="nome">
        <h4>mensagem:</h4>
        <input type="text" name="msg"><br>

        <input type="submit" name="submit" value="Enviar" id="botao"><br>
    </form>
    
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
                header("Refresh:3; exibicao_dados.php");
            } else {
                echo "Dados não inseridos!";
            }
        }
        ?>
    </center>

    <br><br><br><br><br>
    <br><br><br><br><br>
    <br><br><br><br><br>

    <footer class="formas-pagamento">
        <p>Formas de pagamento</p>
        <img src="img/Formasdepagamento.webp" width="250" height="100">
        <p id="rodape"> &copy; Recode Pro</p>
    </footer>

</body>

</html>