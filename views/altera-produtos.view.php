<main>
    <div class="container my-2" style="padding-bottom: 120px;">
        <p class="bg-success text-white d-flex justify-content-center p-2 rounded"><strong>Preencha todos os campos para criação do produto</strong></p>
        <?php
        $acao = $_GET['acao'] ?? 'altera';
        if ($acao == 'erro-campos-vazios') :
        ?>
            <div class="d-flex justify-content-center" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                Preencha o campo relacionado a modificação escolhida!
            </div>
        <?php
        endif;
        if ($acao == 'erro-id-vazio') :
        ?>
            <div class="d-flex justify-content-center" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                Preencha um id!
            </div>
        <?php
        endif;
        if ($acao == 'erro-id-invalido') :
        ?>
            <div class="d-flex justify-content-center" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                Insira um Id valido!
            </div>
        <?php
        endif;
        if ($acao == 'erro-escolha') :
        ?>
            <div class="d-flex justify-content-center" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                Escolha uma opção!
            </div>
        <?php
        endif;
        if ($acao == 'alterar-produto') :
        ?>
        <?php require('controllers/feedback-store-alterar-produtos.controller.php');
        else :
            require('controllers/feedback-create-alterar-produtos.controller.php');
        endif;
        ?>
</main>