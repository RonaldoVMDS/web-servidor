<?php
require ('conexao.php');
    $bd = Conexao::get();
    $query = $bd -> prepare("SELECT * FROM produto");
    $query -> execute();
    $produtos = $query -> fetchAll(PDO::FETCH_OBJ);
?>
<main class="container">
    <table>
        <thead style="text-align: center;">
            <th>ID Produto</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>P</th>
            <th>M</th>
            <th>G</th>
            <th>GG</th>
        </thead>
        <tbody style="text-align: center;">
            <?php foreach($produtos as $produto): ?>
            <tr>
                <td><?= $produto->id_produto ?></td>
                <td><?= $produto->prod_nome ?></td>
                <td><?= $produto->prod_preco ?></td>
                <td><?= $produto->tamanho_p ?></td>
                <td><?= $produto->tamanho_m ?></td> 
                <td><?= $produto->tamanho_g ?></td>
                <td><?= $produto->tamanho_gg ?></td>   
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>