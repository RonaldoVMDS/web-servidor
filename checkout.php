<?php
session_start(); //inicia a sessão
require('controllers/base-html.controller.php'); //Requisição da base de conteúdos html, que compõe quase toda a estruta head
?>
<title>Pagamento - RM Sports</title><!-- Complemento e fechamento da estrutura head, adicionando o título -->
</head>

<body>
    <!-- Requisição da barra de navegação -->
    <?php require('controllers/cabecalho.controller.php') ?>
    <!-- Requisição da barra de navegação -->

    <!-- Pagamento -->
    <?php require_once('views/checkout.view.php'); ?>
    <!-- Pagamento -->

    <!-- Rodapé -->
    <?php require('views/footer.view.php') ?>
    <!-- Rodapé -->
</body>

</html>