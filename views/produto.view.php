<?php
require('conexao.php');
$bd = Conexao::get();
$id = $_GET['id'];
$query = $bd->prepare("SELECT * FROM produto WHERE id_produto = $id");
$query->execute();
$produtos = $query->fetch(PDO::FETCH_OBJ);
?>
<main>

    <div class="container my-3">
        <!-- Container que irá conter todos os elementos -->
        <div class="row">
            <div class="col-md-6 col-sm-4 col-3">
                <div class="card">
                    <img class="card-img" src="<?= $produtos->prod_imagem ?>" alt="">
                </div>
            </div><!-- imagem do produto -->
            <div class="col-9 col-sm-8 col-md-4 offset-md-2">
                <!-- barra com o nome, preço, tamanho e cor do produto e frete -->
                <h2 class="card-title text-success mb-4"><?= $produtos->prod_nome ?></h2>
                <div class="mb-5">
                    <h5 class="text-justify text-success"><?= $produtos->prod_descricao ?></h5>
                </div>
                <h4 class="form-color card-text mb-5">Preço: R$: <?= $produtos->prod_preco ?></h4>
                <label class="form-color form-label" for="opcoes" id="opcoes">Tamanho do Produto:</label>
                <select class="form-select mb-5 text-center" name="opcoes">
                    <option value="tamanho_p">P</option>
                    <option value="tamanho_m" selected>M</option>
                    <option value="tamanho_g">G</option>
                    <option value="tamanho_gg">GG</option>
                </select>
                <form action="">
                    <h5 class="form-color mb-2">Selecionar quantidade de produtos:</h5>
                    <div class="input-group mb-5">
                        <input type="number" name="qtde" value="1" class="form-control text-center border-dark">
                        <button type="reset" class="btn btn-sm border-dark trash">
                            <i class="fa-solid fa-trash fa"></i>
                        </button>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <a href="produtos.php" class="btn btn-outline-dark">Continuar comprando</a>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-success">Adicionar ao Carrinho</button>
                    </div>
                    </div>
                    
                </form>
            </div><!-- ... -->
        </div>
    </div>


    </div>

</main>