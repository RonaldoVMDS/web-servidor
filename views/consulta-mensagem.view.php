<?php
require('conexao.php');
$bd = Conexao::get();
$query = $bd->prepare("SELECT * FROM feedback");
$query->execute();
$mensagens = $query->fetchAll(PDO::FETCH_OBJ);
?>
<main class="container my-2 d-flex justify-content-center">
    <div>
    <table >
        <thead>
            <ul class="list-group list-group-horizontal">
                <li style="width: 140px;" class="list-group-item  d-flex justify-content-center text-primary"><strong>ID Mensagem</strong></li>
                <li style="width: 300px;" class="list-group-item  d-flex justify-content-center text-primary"><strong>Nome</strong></li>
                <li style="width: 100px;" class="list-group-item  d-flex justify-content-center text-primary"><strong>Opção</strong></li>
                <li style="width: 400px;" class="list-group-item  d-flex justify-content-center text-primary"><strong>Mensagem</strong></li>
                <li style="width: 300px;" class="list-group-item  d-flex justify-content-center text-primary"><strong>Email</strong></li>
            </ul>
        </thead>
        <tbody >
            <?php foreach ($mensagens as $mensagem) : ?>
                <ul class="list-group list-group-horizontal">
                    <li style="width: 140px;" class="list-group-item d-flex justify-content-center"><?= $mensagem->id_feedback ?></li>
                    <li style="width: 300px;" class="list-group-item d-flex justify-content-center"><?= $mensagem->feed_nome ?></li>
                    <li style="width: 100px;" class="list-group-item d-flex justify-content-center"><?= $mensagem->feed_opcao ?></li>
                    <li style="width: 400px;" class="list-group-item d-flex justify-content-center"><?= $mensagem->feed_mensagem ?></li>
                    <li style="width: 300px;" class="list-group-item d-flex justify-content-center"><?= $mensagem->feed_email ?></li>
                </ul>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</main>
<div style="height: 115px;" class="d-block d-sm-none"></div>
<div style="height: 67px;" class="d-none d-sm-block d-md-none"></div>
<div style="height: 43px;" class="d-none d-md-block"></div>