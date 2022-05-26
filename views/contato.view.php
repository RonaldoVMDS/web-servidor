<?php
session_start(); //inicia a sessão
require('controllers/base-html.controller.php'); //Requisição da base de conteúdos html, que compõe quase toda a estruta head
?>
<title>Contato - RM Sports</title><!-- Complemento e fechamento da estrutura head, adicionando o título -->
</head>

<body>
    <!-- Requisição da barra de navegação -->
    <?php require('controllers/cabecalho.controller.php') ?>
    <!-- Requisição da barra de navegação -->

    <!-- Controlador do Administrador -->
    <?php require("controllers/administrador-cont.controller.php") ?>
    <!-- Controlador do Administrador -->

    <!-- Tela de contato -->
    <main class="container my-2">
        <p class="bg-success text-white d-flex justify-content-center p-2 rounded"><strong>Deixe sua avaliação!</strong></p>
        <?php
        $acao = $_GET['acao'] ?? 'contatar';

        if ($acao == 'erro-campos-vazios') : ?>
            <div class="d-flex justify-content-center rounded" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                Preencha todos os campos!
            </div>

        <?php endif;
        if ($acao == 'contato') : ?>
            <div class="d-flex justify-content-center rounded" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                <?php require('controllers/feedback-store-contato.controller.php') ?>
            </div>
        <?php
        else :
            require('controllers/feedback-create-contato.controller.php');
        endif;
        ?>
    </main>
    <!-- Rodapé -->
    <?php require('controllers/rodape.controller.php') ?>
    <!-- Rodapé -->
</body>

</html>