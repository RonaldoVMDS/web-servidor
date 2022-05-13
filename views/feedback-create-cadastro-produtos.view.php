<form action="cadastro-produtos.php?acao=cadastrar-produtos" method="POST" name="cadastro-produto">
    <fieldset class="row">
        <legend>Informações do Produto:</legend>
        <div class="col-md-6">
            <label class="form-label" for="nome_produto">Nome do Produto: </label>
            <input class="form-control mb-3" type="text" name="nome_produto">
            <label class="form-label" for="desc_produto">Descrição: </label>
            <textarea name="desc_produto" class="form-control mb-3" placeholder="Digite aqui a sua mensagem"></textarea>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="preco_produto">Preço </label>
            <input class="form-control mb-3" type="text" name="preco_produto">
            <label class="form-label" for="quant_produto">Quantidade em estoque: </label>
            <input class="form-control mb-3" type="number" name="quant_produto">
        </div>
        <div class="col">
            <label class="form-label" for="img_produto">Imagem do produto:</label>
            <input type="file" class="form-control" name="img_produto" />
        </div>
        <div class="col-12">
            <button class="btn btn-secondary my-2" type="reset">Apagar</button>
            <button class="btn btn-primary my-2" type="submit">Realizar cadastro</button>
        </div>
        </div>
    </fieldset>
</form>
</div>
