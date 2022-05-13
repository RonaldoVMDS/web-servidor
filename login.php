<?php 
    session_start();//inicia a sessão
    require('controllers/base-html.controller.php');//Requisição da base de conteúdos html, que compõe quase toda a estruta head
?>
    <title>Login - RM Sports</title><!-- Complemento e fechamento da estrutura head, adicionando o título -->
</head>

<body>
    <!-- Requisição da barra de navegação -->
    <?php require('controllers/cabecalho.controller.php') ?>
    <!-- Requisição da barra de navegação -->
    
    <!-- Login -->
    <?php require('controllers/login.controller.php') ?>
    <!-- Login -->

    <!-- Rodapé -->
    <?php require('controllers/rodape.controller.php') ?>
    <!-- Rodapé -->
</body>

</html>