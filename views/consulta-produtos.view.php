<?php
require('conexao.php');
$bd = Conexao::get();
$query = $bd->prepare("SELECT * FROM produto");
$query->execute();
$produtos = $query->fetchAll(PDO::FETCH_OBJ);

?>
<main class="container my-2 d-flex justify-content-center">
    <div>
        <table>
            <thead>
                <ul class="list-group list-group-horizontal">
                    <li style="width: 120px;" class="list-group-item  d-flex justify-content-center text-primary"><strong>ID Produto</strong></li>
                    <li style="width: 300px;" class="list-group-item  d-flex justify-content-center text-primary"><strong>Nome</strong></li>
                    <li style="width: 100px;" class="list-group-item  d-flex justify-content-center text-primary"><strong>Valor</strong></li>
                    <li style="width: 100px;" class="list-group-item  d-flex justify-content-center text-primary"><strong>P</strong></li>
                    <li style="width: 100px;" class="list-group-item  d-flex justify-content-center text-primary"><strong>M</strong></li>
                    <li style="width: 100px;" class="list-group-item  d-flex justify-content-center text-primary"><strong>G</strong></li>
                    <li style="width: 100px;" class="list-group-item  d-flex justify-content-center text-primary"><strong>GG</strong></li>
                </ul>
            </thead>
            <tbody>
                <?php foreach ($produtos as $produto) : ?>
                    <ul class="list-group list-group-horizontal">
                        <li style="width: 120px;" class="list-group-item d-flex justify-content-center"><?= $produto->id_produto ?></li>
                        <li style="width: 300px;" class="list-group-item d-flex justify-content-center"><?= $produto->prod_nome ?></li>
                        <li style="width: 100px;" class="list-group-item d-flex justify-content-center"><?= $produto->prod_preco ?></li>
                        <li style="width: 100px;" class="list-group-item d-flex justify-content-center"><?= $produto->tamanho_p ?></li>
                        <li style="width: 100px;" class="list-group-item d-flex justify-content-center"><?= $produto->tamanho_m ?></li>
                        <li style="width: 100px;" class="list-group-item d-flex justify-content-center"><?= $produto->tamanho_g ?></li>
                        <li style="width: 100px;" class="list-group-item d-flex justify-content-center"><?= $produto->tamanho_gg ?></li>
                    </ul>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</main>