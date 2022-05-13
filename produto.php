<?php
session_start(); //inicia a sessão
require('controllers/base-html.controller.php'); //Requisição da base de conteúdos html, que compõe quase toda a estruta head
?>
<title>RM Sports</title><!-- Complemento e fechamento da estrutura head, adicionando o título -->
</head>

<body>
    <!-- Requisição da barra de navegação -->
    <?php require('controllers/cabecalho.controller.php') ?>
    <!-- Requisição da barra de navegação -->

    <main>

        <div class="container my-2">
            <!-- Container que irá conter todos os elementos -->
            <div class="row">
                <div class="col-md-6">
                    <h1>Imagem grande do produto</h1>
                    <div class="border">
                    <h2>Descrição</h2>
                    <p>Aqui vai a descrição detalhada do produto</p></div>
                    
                    <section class="border row">
                        <div class="col-md-4">Aqui vai uma lista horizontal com 3 produtos aleatórios</div>
                        <div class="col-md-4">Aqui vai uma lista horizontal com 3 produtos aleatórios</div>
                        <div class="col-md-4">Aqui vai uma lista horizontal com 3 produtos aleatórios</div>
                    </section>
                </div><!-- imagem do produto -->
                <div class="col-md-5">
                    <!-- barra com o nome, preço, tamanho e cor do produto e frete -->
                    <small>Quantidade vendida</small>
                    <h2>Nome do produto</h2>
                    <p>Preço do produto</p>
                    <p>Tamanho do produto</p>
                    <p>Selecionar quantidade de produtos</p>
                    <button>Adicionar ao carrinho</button>
                </div><!-- ... -->
            </div>
        </div>


        </div>

    </main>

    <!-- Rodapé -->
    <?php require('controllers/rodape.controller.php') ?>
    <!-- Rodapé -->
</body>