<form action="cadastro-produtos.php?acao=alterar-produtos" method="POST" name="altera-produto">
    <fieldset class="row">
        <legend>Informações do Produto:</legend>
        <div class="col-md-4">
            <label class="form-label" for="id_produto">Id do Produto: </label>
            <input class="form-control mb-3" type="number" name="id_produto">
        </div>
        <div class="col-md-4">
            <label class="mb-2 form-label" for="opcoes" id="options">Escolher alteração: </label>
            <select class="form-select mb-3" name="opcoes">
                <option value="nome">Nome</option>
                <option value="preco">Preço</option>
                <option value="qtde_p">Quantidade P:</option>
                <option value="qtde_m">Quantidade M:</option>
                <option value="qtde_g">Quantidade G:</option>
                <option value="qtde_gg">Quantidade GG:</option>
            </select>
        </div>
        <div class="col-md-4">
            <label class="form-label" for="preco_produto">Preço (Ex: 19.99)</label>
            <input class="form-control mb-3" type="text" name="preco_produto">
            <label class="form-label" for="tamanho_p">P: </label>
            <input class="form-control mb-3" type="number" name="tamanho_p" style="width: 100px;">
            <label class="form-label" for="tamanho_m">M: </label>
            <input class="form-control mb-3" type="number" name="tamanho_m" style="width: 100px;">
            <label class="form-label" for="tamanho_g">G: </label>
            <input class="form-control mb-3" type="number" name="tamanho_g" style="width: 100px;">
            <label class="form-label" for="tamanho_gg">GG: </label>
            <input class="form-control mb-3" type="number" name="tamanho_gg" style="width: 100px;">
        </div>
        <div class="col">
            <label class="form-label" for="img_produto">Diretório da imagem a partir da pasta de imagens. Exemplo: img\produtos\camisa_avai.png</label>
            <input type="text" class="form-control" name="img_produto" />
        </div>
        <div class="col-12">
            <button class="btn btn-secondary my-2" type="reset">Apagar</button>
            <button class="btn btn-primary my-2" type="submit" name="cadastrar">Alterar cadastro</button>
        </div>
        </div>
    </fieldset>
</form>
</div>