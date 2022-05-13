<main>    
    <div class="container my-2">
    <p class="bg-success text-white d-flex justify-content-center p-2 rounded"><strong>Preencha todos os campos para criação do produto</strong></p>
    <?php 
            $acao = $_GET['acao'] ?? 'cadastrar-produtos';

            if ($acao == 'erro-nome-vazio'){
                echo "Preencha o campo Nome!";
            }
            if ($acao == "erro-descricao-vazio"){
                echo "Preencha o campo Descrição!";
            }
            if ($acao == "erro-preco-vazio"){
                echo "Por favor, preencha o campo Preço!";
            }
            if ($acao == "erro-quantidade-vazio"){
                echo "Preencha o campo Quantidade!";
            }
            if ($acao == "erro-imagem-vazio"){
                echo "Preencha o campo Imagem!";
            }
            if ($acao == "cadastrar-produtos"){
                require("controllers/feedback-store-cadastro-produtos.controller.php");
            }else{
                require("controllers/feedback-create-cadastro-produtos.controller.php");
            }          
        ?>
</main>
