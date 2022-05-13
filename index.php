<?php 
    session_start();//inicia a sessão
    require('controllers/base-html.controller.php');//Requisição da base de conteúdos html, que compõe quase toda a estruta head
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

    <!-- Produtos principais -->
    <?php require("controllers/produtos-principais.controller.php") ?>
    <!-- Produtos principais -->

    <!-- Rodapé -->
    <?php require('controllers/rodape.controller.php') ?>
    <!-- Rodapé -->
</body>

</html>