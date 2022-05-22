<?php
require('conexao.php');
$bd = Conexao::get();
$id = $_GET['id'];
$erro = $_GET['erro'] ?? '';
$query = $bd->prepare("SELECT * FROM produto WHERE id_produto = $id");
$query->execute();
$produto = $query->fetch(PDO::FETCH_OBJ);

$id_prod = $id;
$nome = $produto->prod_nome;
$img = $produto->prod_imagem;
$preco = $produto->prod_preco;
$desc = $produto->prod_descricao;
$quantidade_p = $produto->tamanho_p;
$quantidade_m = $produto->tamanho_m;
$quantidade_g = $produto->tamanho_g;
$quantidade_gg = $produto->tamanho_gg;
?>
<main>

    <div class="container my-3">
        <form action="carrinho.php?nome=<?= $nome ?>&preco=<?= $preco ?>&img=<?= $img ?>&desc=<?= $desc ?>&id_prod=<?= $id_prod ?>" method="POST">
            <!-- Container que irá conter todos os elementos -->
            <div class="row">
                <div class="col-md-6 col-sm-4 col-3">
                    <div class="card">
                        <img class="card-img border border-3 border-success " src="<?= $img ?>" alt="">
                    </div>
                </div><!-- imagem do produto -->
                <div class="col-9 col-sm-8 col-md-4 offset-md-1">
                    <!-- barra com o nome, preço, tamanho e cor do produto e frete -->
                    <h2 class="card-title text-success"><?= $nome ?></h2>
                    <small class="text-success">Cód: <?= $id_prod ?></small>
                    <div class="mb-3">
                        <h5 class="text-justify text-success"><?= $desc ?></h5>
                    </div>
                    <h4 class=" card-text mb-4">Preço: R$: <?= $preco ?></h4>
                    <label class="form-color form-label d-block" for="opcoes" id="opcoes">Tamanho do Produto:</label>
                    <div class="my-3 d-flex justify-content-around ">
                    <small class="border border-success rounded px-2">P: <?= $quantidade_p ?> Un</small>
                    <small class="border border-success rounded px-2">M: <?= $quantidade_m ?> Un</small>
                    <small class="border border-success rounded px-2">G: <?= $quantidade_g ?> Un</small>
                    <small class="border border-success rounded px-2">GG: <?= $quantidade_gg ?> Un</small>
                    </div>
                    <select class="form-select mb-4 text-center border-success" name="opcoes">
                        <option value="quantidade_p">P</option>
                        <option value="quantidade_m" selected>M</option>
                        <option value="quantidade_g">G</option>
                        <option value="quantidade_gg">GG</option>
                    </select>
                    <?php
                        if($erro == 'quantidade') : ?>
                        <div class=" justify-content-center text-center rounded py-2 mb-2" style="background-color: #fafae1;">
                            <p style="font-size: 19px">Quantia solicitada é maior que a disponível, ajustada para o máximo possível no carrinho</p>
                            <a class="text-decoration-none" href="carrinho.php">Ir para o carrinho</a>
                        </div>
                        <?php endif; ?>
                    <h5 class="form-color mb-2">Selecionar quantidade de produtos:</h5>
                    <div class="input-group mb-3">
                        <input type="number" name="qtde" value="1" min="1" class="form-control text-center border-dark">
                        <button type="reset" class="btn btn-sm border-dark trash">
                            <i class="fa-solid fa-trash fa"></i>
                        </button>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <a href="produtos.php" class="btn btn-outline-dark">Continuar comprando</a>
                        </div>
                        <div class="col-md-6 mt-3">
                            <button type="submit" class="btn btn-success">
                                Adicionar ao Carrinho
                            </button>
                        </div>
                    </div>


                </div><!-- ... -->
            </div>
        </form>
    </div>

</main>
<div style="height: 115px;" class="d-block d-sm-none"></div>
<div style="height: 67px;" class="d-none d-sm-block d-md-none"></div>
<div style="height: 43px;" class="d-none d-md-block"></div>