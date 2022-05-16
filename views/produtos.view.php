<?php
    require ('conexao.php');
    $bd = Conexao::get();
    $query = $bd -> prepare("SELECT * FROM produto");
    $query -> execute();
    $produtos = $query -> fetchAll(PDO::FETCH_OBJ);
?>
<main class="container">
    <!-- Primeira linha de conteúdos -->
    <div class="row g-3">
        <?php foreach ($produtos as $produto) : ?> <!-- Início do foreach e em seguida as instruções html que serão repetidas -->
            <!-- essa é a tela de visão de todos os produtos, para cada produto será exibida todas as suas informações -->
            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch">
                <div class="card text-center bg-light">
                    <a href="produto.php">
                    <img src="<?= $produto->prod_imagem ?>" class="card-img" style="cursor: pointer;" alt="">
                    </a>
                    <div class="card-header">R$ <?= $produto->prod_preco ?></div>
                    <div class="card-body">
                        <h4 class="card-title text-success description-size-limiter-1-line"><?= $produto->prod_nome ?></h4>
                        <p class="card-text description-size-limiter-2-lines"><?= $produto->prod_descricao ?></p>
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