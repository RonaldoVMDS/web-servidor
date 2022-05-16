<form action="cadastro.php?acao=cadastrar-usuario" method="POST" name="cadastro">
    <!-- Início formulário-->
    <div class="form-group row my-2 m-0">
        <div class="row">
            <fieldset class="row m-0">
                <legend>Dados Pessoais:</legend>
                <div class="mb-3 col-md-6">
                    <label for="nome" class="form-label">Nome: </label>
                    <input type="text" class="form-control" name="nome" id="nome">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="sobrenome" class="form-label">Sobrenome: </label>
                    <input type="text" class="form-control" name="sobrenome" id="sobrenome">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="usuario" class="form-label">Nome de Usuário: </label>
                    <input type="text" class="form-control" name="usuario" id="usuario">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">E-mail: </label>
                    <input type="email" class="form-control" name="email" id="email">
                </div>
                <legend>Segurança:</legend>
                <div class="mb-3 col-md-6">
                    <label for="senha" class="form-label">Senha: </label>
                    <input type="password" class="form-control" name="senha" id="senha">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="confirma-senha" class="form-label">Digite sua senha novamente: </label>
                    <input type="password" class="form-control" name="confirma-senha">
                </div>
            </fieldset>
        </div>
        <div class="row m-0">
            <div class="col-auto">
                <button class="btn btn-secondary my-2" type="reset">Apagar</button>
                <button class="btn btn-primary my-2" type="submit">Realizar cadastro</button>
            </div>
        </div>
    </div>
</form><!-- Fim formulário -->
<div style="height: 115px;" class="d-block d-sm-none"></div>
<div style="height: 67px;" class="d-none d-sm-block d-md-none"></div>
<div style="height: 43px;" class="d-none d-md-block"></div>