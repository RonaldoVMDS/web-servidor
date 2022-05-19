<form action="cadastro-produtos.php?acao=cadastrar-produtos" method="POST" name="cadastro-produto">
    <fieldset class="row">
        <legend>Informações do Produto:</legend>
        <div class="col-md-6">
            <label class="form-label" for="nome_produto">Nome do Produto: </label>
            <input class="form-control mb-3" type="text" name="nome_produto">
        </div>
        <div class="col-md-6">
            <label class="form-label" for="preco_produto">Preço (Usar . Exp: 19.99)</label>
            <input class="form-control mb-3" type="text" name="preco_produto">
        </div>
        <div class="col-md-6">
            <label class="form-label" for="desc_produto">Descrição: </label>
            <textarea name="desc_produto" class="form-control mb-3" placeholder="Digite aqui a sua mensagem" style="height: 125px;"></textarea>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-3">
                <label class="form-label" for="tamanho_p">P: </label>
                <input class="form-control mb-3" type="number" name="tamanho_p">
                </div>
                <div class="col-md-3">
                <label class="form-label" for="tamanho_m">M: </label>
                <input class="form-control mb-3" type="number" name="tamanho_m">
                </div>
                <div class="col-md-3">
                <label class="form-label" for="tamanho_g">G: </label>
                <input class="form-control mb-3" type="number" name="tamanho_g">
                </div>
                <div class="col-md-3">
                <label class="form-label" for="tamanho_gg">GG: </label>
                <input class="form-control mb-3" type="number" name="tamanho_gg">
                </div>
            </div>

        </div>
        <div class="col">
            <label class="form-label" for="img_produto">Diretório da imagem a partir da pasta de imagens. Exemplo: img\produtos\camisa_avai.png</label>
            <input type="text" class="form-control" name="img_produto" />
        </div>
        <div class="col-12">
            <button class="btn btn-secondary my-2" type="reset">Apagar</button>
            <button class="btn btn-primary my-2" type="submit" name="cadastrar">Realizar cadastro</button>
        </div>
        </div>
    </fieldset>
</form>
</div>