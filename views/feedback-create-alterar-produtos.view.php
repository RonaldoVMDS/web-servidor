<form action="altera-produtos.php?acao=alterar-produto" method="POST" name="altera">
    <fieldset class="row">
        <legend>Informações do Produto:</legend>
        <div class="col-md-4">
            <label class="form-label" for="id_produto">Id do Produto: </label>
            <input class="form-control mb-3" type="number" name="id_produto">
        </div>
        <div class="col-md-8">
            <label class="mb-2 form-label" for="opcoes" id="opcoes">Escolher alteração: </label>
            <select class="form-select mb-3" name="opcoes">
                <option value="escolha">Escolha</option>
                <option value="prod_nome">Nome</option>
                <option value="prod_descricao">Descrição</option>
                <option value="prod_imagem">Imagem</option>
                <option value="prod_preco">Preço</option>
                <option value="tamanho_p">Quantidade P</option>
                <option value="tamanho_m">Quantidade M</option>
                <option value="tamanho_g">Quantidade G</option>
                <option value="tamanho_gg">Quantidade GG</option>
            </select>
        </div>
        <div class="col-md-12">
            <label class="form-label">Se selecionou para alterar Nome, Descrição, Preço ou diretório da imagem, insira nova informação no campo abaixo:</label>
            <input class="form-control mb-3" type="text" name="altera-texto">
        </div>
        <div class="col-md-12">
            <label class="form-label">Se selecionou para alterar quantidade em estoque de tamanho, insira nova informação no campo abaixo:</label>
            <input class="form-control mb-3" type="number" name="altera-numero">
        </div>
        <div class="col-12">
            <button class="btn btn-secondary my-2" type="reset">Apagar</button>
            <button class="btn btn-primary my-2" type="submit" name="alterar">Alterar cadastro</button>
        </div>
    </fieldset>
</form>
</div>