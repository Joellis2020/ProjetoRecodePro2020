<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos produtos</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="js/Produtos.js"></script>
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

    <hr>

    <section>


        <ul class="text-primary  style=" text-align:center">
            <h3 style="font-size:20px"><ins><strong>Categorias</strong></ins></h3>
            <li onclick="exibir_todos()">Geral(12)</li>
            <li onclick="exibe_lista('fogoes')">Fogões (3)</li>
            <li onclick="exibe_lista('refrigeradores')">Refrigeradores(3)</li>
            <li onclick="exibe_lista('lavadouras')">Lavadouras (2)</li>
            <li onclick="exibe_lista('microondas')">Micro-ondas (2)</li>
            <li onclick="exibe_lista('arcondicionados')">Ar-condicionados(2)</li>
        </ul>


        <hr>
        <center>
            <?php

            $dados_json = file_get_contents("http://localhost/teste/pegar_conteudo.php?table=produtos");
            $dados = json_decode($dados_json, true);
            foreach ($dados as $key => $row) {


            ?>
                <div class="box-produto" id="<?php echo $row["categoria"]; ?>" style="display: inline-block">
                    <img src="<?php echo $row["imagem"]; ?>" width="120px" onclick="destaque(this)">
                    <br>
                    <p class="text-primary"><strong><?php echo $row["descricao"]; ?></strong></p>
                    <hr>
                    <p class="text-danger"><strike>R$ <?php echo number_format($row["preco"], 2, ",", "."); ?></strike></p>
                    <p class="text-info">R$ <?php echo number_format($row["preco_venda"], 2, ",", "."); ?></p>
                </div>
            <?php

            }

            ?>
        </center>
    </section>

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