<main class="container">
    <!-- Primeira linha de conteúdos -->
    <div class="row g-3">
        <?php for ($controle = 0; $controle < 8; $controle++) : ?> <!-- Laço de repetição da estrutura dos produtos, imprime os 8 primeiros produtos -->
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch"> 
                <!-- A estrutura dos produtos do array é: [produto['imagem', (float)preco, 'nome', 'descrição','qtde em estoque']] -->
                <div class="card text-center bg-light">
                    <!-- A cada iteração, envia a imagem do produto-->
                    <a href="produto.php">
                    <img src="<?= $produtosRandom[$controle][0] ?>" class="card-img" style="cursor: pointer;" alt="">
                    <!-- A cada iteração, envia o preço do produto-->
                    </a>
                    <div class="card-header">R$ <?= $produtosRandom[$controle][1] ?></div>
                    <div class="card-body">
                        <!-- A cada iteração, envia o nome do produto-->
                        <h4 class="card-title text-success description-size-limiter-1-line"><?= $produtosRandom[$controle][2] ?></h4>
                        <!-- A cada iteração, envia a descrição do produto-->
                        <p class="card-text description-size-limiter-2-lines"><?= $produtosRandom[$controle][3] ?></p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</main>
<div style="height: 115px;" class="d-block d-sm-none"></div>
<div style="height: 67px;" class="d-none d-sm-block d-md-none"></div>
<div style="height: 43px;" class="d-none d-md-block"></div>
