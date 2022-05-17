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
    
        <?php for ($controle = 0; $controle < 12; $controle++) : ?> <!-- Laço de repetição da estrutura dos produtos, imprime os 8 primeiros produtos -->
            <div class="col-lg-3 col-md-4 col-sm-6 d-flex align-items-stretch"> 
                <!-- A estrutura dos produtos do array é: [produto['imagem', (float)preco, 'nome', 'descrição','qtde em estoque']] -->
                <div class="card text-center bg-light">
                    <a href="produto.php">
                    <img src="<?= $produtos[$controle]->prod_imagem ?>" class="card-img" style="cursor: pointer;" alt="">
                    </a>
                    <div class="card-header">R$ <?= $produtos[$controle]->prod_preco ?></div>
                    <div class="card-body">
                        <h4 class="card-title text-success description-size-limiter-1-line"><?= $produtos[$controle]->prod_nome ?></h4>
                        <p class="card-text description-size-limiter-2-lines"><?= $produtos[$controle]->prod_descricao ?></p>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</main>
<div style="height: 115px;" class="d-block d-sm-none"></div>
<div style="height: 67px;" class="d-none d-sm-block d-md-none"></div>
<div style="height: 43px;" class="d-none d-md-block"></div>
