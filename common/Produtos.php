<?php
include('conexao_bd.php');
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nossos produtos</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <script src="js/Produtos.js"></script>
</head>

<body>

    <?php
    include_once('menu.html');
    ?>

    <hr>

    <section>

        <ul class="categorias">
            <h3><ins>Categorias</ins></h3>
            <li onclick="exibir_todos()">Geral(12)</li>
            <li id="lista" onclick="exibe_lista('fogoes')">Fogões (3)</li>
            <li id="lista" onclick="exibe_lista('refrigeradores')">Refrigeradores(3)</li>
            <li id="lista" onclick="exibe_lista('lavadouras')">Lavadouras (2)</li>
            <li id="lista" onclick="exibe_lista('microondas')">Micro-ondas (2)</li>
            <li id="lista" onclick="exibe_lista('arcondicionados')">Ar-condicionados(2)</li>
        </ul>

        <hr>

        <?php
        $sql = "select * from produtos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($rows = $result->fetch_assoc()) {
        ?>

                <div class="box-produto" id="<?php echo $rows["categoria"]; ?>" style="display: inline-block">
                    <img src="<?php echo $rows["imagem"]; ?>" width="120px" onclick="destaque(this)">
                    <br>
                    <p class="descricao"><?php echo $rows["descricao"]; ?></p>
                    <hr>
                    <p class="descricao"><strike>R$ <?php echo $rows["preco"]; ?></strike></p>
                    <p class="preco">R$ <?php echo $rows["preco_venda"]; ?></p>
                </div>

        <?php
            }
        } else {
            echo "Nenhum produto cadastrado!";
        }

        ?>

    </section>

    <br><br>

    <footer class="formas-pagamento">
        <p>Formas de pagamento</p>
        <img src="img/Formasdepagamento.webp" width="250" height="100">
        <p id="rodape"> &copy; Recode Pro</p>
    </footer>

</body>

</html>