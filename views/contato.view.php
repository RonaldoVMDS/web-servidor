<!-- Tela de contato -->
<main class="container my-2">
    <p class="bg-success text-white d-flex justify-content-center p-2 rounded"><strong>Deixe sua avaliação!</strong></p>
    <?php
    $acao = $_GET['acao'] ?? 'contatar';

    if ($acao == 'erro-campos-vazios') : ?>
        <div class="d-flex justify-content-center rounded" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
            Preencha todos os campos!
        </div>

    <?php endif;
    if ($acao == 'contato') : ?>
        <div class="d-flex justify-content-center rounded" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
            <?php require('controllers/feedback-store-contato.controller.php') ?>
        </div>
    <?php
    else :
        require('controllers/feedback-create-contato.controller.php');
    endif;
    ?>
</main>