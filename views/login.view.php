<main class="container py-2">
    <p class="bg-success text-white d-flex justify-content-center p-2 rounded"><strong>Entre com sua conta para realizar compras em nossa loja</strong></p>
    <form action="login.php?acao=logar"method="POST">
        <?php if ($erro) : ?>
            <div class="d-flex justify-content-center rounded" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
                Atenção: Usuário ou senha incorretos! <!-- apresentação de erro caso o usuário não tenha sido validado com sucesso -->
            </div>
        <?php endif; ?>
        <?php $ajuda = false; if ($ajuda) : ?>
            <div class="d-flex justify-content-center rounded" style="background-color: #fafae1; height: 35px;line-height: 35px; ">
            Insira aqui suas credenciais!<!-- apresentação de ajuda -->
            </div>
        <?php endif; ?>
        <div class="container"> <!-- Início formulário-->
            <div class="col-12 col-md-6 offset-md-3">
                <div class="form-group">
                    <fieldset>
                        <label>Usuário: </label>
                        <input class="form-control " type="text" name="usuario" id="usuario">
                    </fieldset>
                    <fieldset>
                        <label>Senha: </label>
                        <input class="form-control" type="password" name="senha" id="senha">
                    </fieldset>
                    <button type="submit" style="width: 100%;" class="btn btn-primary my-2">Entrar</button>
                </div>
                <span class="text-muted d-flex justify-content-center">Não tem uma conta?
                    <a href="../cadastro.php" class="mx-1 text-decoration-none text-primary">Cadastre-se</a>
                </span>
            </div>
        </div>
    </form><!-- Fim formulário-->
</main>