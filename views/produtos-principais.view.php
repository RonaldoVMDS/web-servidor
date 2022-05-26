<?php
session_start(); //inicia a sessão
require('conexao.php');
$bd = Conexao::get();
$query = $bd->prepare("SELECT * FROM produto");
$query->execute();
$produtos = $query->fetchAll(PDO::FETCH_OBJ);
$produtosRandom = $produtos;

shuffle($produtosRandom);
require('controllers/base-html.controller.php'); //Requisição da base de conteúdos html, que compõe quase toda a estruta head
?>
<title>RM Sports</title><!-- Complemento e fechamento da estrutura head, adicionando o título -->
</head>

<body>

    <!-- Requisição da barra de navegação -->
    <?php require('controllers/cabecalho.controller.php') ?>
    <!-- Requisição do cabeçaljho/ barra de navegação -->

    <!-- requisição da barra de pesquisa -->
    <?php require('controllers/barra-pesquisa.controller.php') ?>
    <!-- requisição da barra de pesquisa -->

    <!-- Banner Principal -->
    <?php require("controllers/main-banner.controller.php") ?>
    <!-- Banner Principal -->
    <main class="container">
        <!-- Primeira linha de conteúdos -->
        <div class="row g-3">

            <?php for ($controle = 0; $controle < 12; $controle++) : ?>
                <!-- Laço de repetição da estrutura dos produtos, imprime os 8 primeiros produtos -->
                <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                    <!-- A estrutura dos produtos do array é: [produto['imagem', (float)preco, 'nome', 'descrição','qtde em estoque']] -->
                    <div class="card text-center bg-light">
                        <a href="/produto?id=<?= $produtosRandom[$controle]->id_produto ?>">
                            <img src="<?= $produtosRandom[$controle]->prod_imagem ?>" class="card-img" style="cursor: pointer;" alt="">
                        </a>
                        <div class="card-header">R$ <?= $produtosRandom[$controle]->prod_preco ?></div>
                        <div class="card-body">
                            <h4 class="card-title text-success"><?= $produtosRandom[$controle]->prod_nome ?></h4>
                            <p class="card-text"><?= $produtosRandom[$controle]->prod_descricao ?></p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </main>
    <div style="height: 115px;" class="d-block d-sm-none"></div>
    <div style="height: 67px;" class="d-none d-sm-block d-md-none"></div>
    <div style="height: 43px;" class="d-none d-md-block"></div>

    <!-- Rodapé -->
    <?php require('controllers/rodape.controller.php') ?>
    <!-- Rodapé -->
</body>

</html>