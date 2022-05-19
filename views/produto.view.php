<?php
    require ('conexao.php');
    $bd = Conexao::get();
    $id = $_GET['id'];
    $query = $bd -> prepare("SELECT * FROM produto WHERE id_produto = $id");
    $query -> execute();
    $produtos = $query -> fetch(PDO::FETCH_OBJ);
?>
<main>

<div class="container my-2">
    <!-- Container que irá conter todos os elementos -->
    <div class="row">
        <div class="col-md-6">
            <img src="<?= $produtos->prod_imagem?>" alt="">
            <div class="my-2">
            <h2><?= $produtos->prod_descricao?></h2>
            </div>
        </div><!-- imagem do produto -->
        <div class="col-md-5 offset-1">
            <!-- barra com o nome, preço, tamanho e cor do produto e frete -->
            <h2><?= $produtos->prod_nome?></h2>
            <p><?= $produtos->prod_preco?></p>
            <p>Tamanho do produto</p>
            <p>Selecionar quantidade de produtos</p>
            <button>Adicionar ao carrinho</button>
        </div><!-- ... -->
    </div>
</div>


</div>

</main>