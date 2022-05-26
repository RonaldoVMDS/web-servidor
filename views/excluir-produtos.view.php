<main>
    <div class="container my-2" style="padding-bottom: 120px;">
        <p class="bg-success text-white d-flex justify-content-center p-2 rounded"><strong>Preencha todos os campos para criação do produto</strong></p>
        <?php
        $acao = $_GET['acao'] ?? 'exclui';
        if ($acao == 'erro-id-vazio') : ?>
            <div class="d-flex justify-content-center" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                Preencha um id!
            </div>
        <?php
        endif;
        if ($acao == 'excluir-produto') :
        ?>
        <?php require('controllers/feedback-store-excluir-produtos.controller.php');
        else :
            require('controllers/feedback-create-excluir-produtos.controller.php');
        endif;
        ?>
</main>