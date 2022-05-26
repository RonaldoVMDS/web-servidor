<?php
session_start(); //inicia a sessão
require('controllers/base-html.controller.php'); //Requisição da base de conteúdos html, que compõe quase toda a estruta head
?>
<title>Cadastro - RM Sports</title> <!-- Complemento e fechamento da estrutura head, adicionando o título -->
</head>

<body>
    <!-- Requisição da barra de navegação -->
    <?php require('controllers/cabecalho.controller.php') ?>
    <!-- Requisição da barra de navegação -->

    <!-- Tela de cadastro -->
    <main>
        <div class="container my-2">
            <p class="bg-success text-white d-flex justify-content-center p-2 rounded"><strong>Cadastre-se para comprar em nossa loja!</strong></p>
            <?php
            $acao = $_GET['acao'] ?? 'cadastro';
            if ($acao == 'erro-campos-vazios') :
            ?>
                <div class="d-flex justify-content-center rounded" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                    Preencha todos os campos!
                </div>
            <?php
            endif;
            if ($acao == 'erro-senha') :
            ?>
                <div class="d-flex justify-content-center rounded" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                    As senhas devem ser iguais!
                </div>
            <?php
            endif;
            if ($acao == 'erro-usu-existe') :
            ?>
                <div class="d-flex justify-content-center rounded" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                    Nome de usuario já em uso, escolha outro!
                </div>
            <?php
            endif;
            if ($acao == 'super-user') :
            ?>
                <div class="d-flex justify-content-center rounded" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                    O usuário não pode ter esse nome!
                </div>
            <?php
            endif;
            if ($acao == 'cadastrar-usuario') :
            ?>
                <div class="d-flex justify-content-center rounded" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                    <?php require('controllers/feedback-store-cadastro.controller.php'); ?>
                </div>
            <?php
            else :
                require('controllers/feedback-create-cadastro.controller.php');
            endif;
            ?>
        </div>
    </main>
    <!-- Rodapé -->
    <?php require('controllers/rodape.controller.php') ?>
    <!-- Rodapé -->
</body>

</html>