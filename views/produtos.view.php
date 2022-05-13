<main class="container">
    <!-- Primeira linha de conteúdos -->
    <div class="row g-3">
        <?php foreach ($produtos as $produto => $infoProduto) : ?> <!-- Início do foreach e em seguida as instruções html que serão repetidas -->
            <!-- essa é a tela de visão de todos os produtos, para cada produto será exibida todas as suas informações -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                <div class="card text-center bg-light">
                    <!-- A estrutura dos produtos do array é: [produto['imagem', (float)preco, 'nome', 'descrição','qtde em estoque']] -->
                    <a href="produto.php">
                    <img src="<?= $infoProduto[0] ?>" class="card-img" style="cursor: pointer;" alt="">
                    </a>
                    <div class="card-header">R$ <?= $infoProduto[1] ?></div>
                    <div class="card-body">
                        <h4 class="card-title text-success description-size-limiter-1-line"><?= $infoProduto[2] ?></h4>
                        <p class="card-text description-size-limiter-2-lines"><?= $infoProduto[3] ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?><!-- Final do foreach -->
        <!-- Para cada produto no array, realizar a modelagem acima -->
    </div>
</main>
<div style="height: 115px;" class="d-block d-sm-none"></div>
<div style="height: 67px;" class="d-none d-sm-block d-md-none"></div>
<div style="height: 43px;" class="d-none d-md-block"></div>