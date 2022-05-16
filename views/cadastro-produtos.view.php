<main>
    <div class="container my-2" style="padding-bottom: 120px;">
        <p class="bg-success text-white d-flex justify-content-center p-2 rounded"><strong>Preencha todos os campos para criação do produto</strong></p>
        <?php
        $acao = $_GET['acao'] ?? 'cadastro-produtos';
        if ($acao == 'erro-campos-vazios') :
        ?>
            <div class="d-flex justify-content-center" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                Preencha todos os campos!
            </div>
        <?php
        endif;
        if ($acao == 'cadastrar-produtos') :
        ?>
            <div class="d-flex justify-content-center" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                <?php require('controllers/feedback-store-cadastro-produtos.controller.php'); ?>
            </div>
        <?php
        else :
            require('controllers/feedback-create-cadastro-produtos.controller.php');
        endif;
        ?>
</main>