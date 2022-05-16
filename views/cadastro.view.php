<!-- Tela de cadastro -->
<main>
    <div class="container my-2 mb-5 pb-5">
        <p class="bg-success text-white d-flex justify-content-center p-2 rounded"><strong>Cadastre-se para comprar em nossa loja!</strong></p>
        <?php
        $acao = $_GET['acao'] ?? 'cadastro';
        if ($acao == 'erro-campos-vazios') :
        ?>
            <div class="d-flex justify-content-center" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                Preencha todos os campos!
            </div>
        <?php
        endif;
        if ($acao == 'erro-senha') :
        ?>
            <div class="d-flex justify-content-center" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                As senhas devem ser iguais!
            </div>
        <?php
        endif;
        if ($acao == 'cadastrar-usuario') :
        ?>
            <div class="d-flex justify-content-center" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                <?php require('controllers/feedback-store-cadastro.controller.php'); ?>
            </div>
        <?php
        else :
            require('controllers/feedback-create-cadastro.controller.php');
        endif;
        ?>
    </div>
</main>