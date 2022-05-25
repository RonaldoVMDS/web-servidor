<form action="excluir-produtos.php?acao=excluir-produto" method="POST" name="exclui">
    <fieldset class="row">
        <legend>Informações do Produto:</legend>
        <div class="col-md-4">
            <label class="form-label" for="id_produto">Id do Produto: </label>
            <input class="form-control mb-3" type="number" name="id_produto" required>
        </div>
        <div class="col-12">
            <button class="btn btn-secondary my-2" type="submit">Excluir</button>
        </div>
    </fieldset>
</form>
</div>