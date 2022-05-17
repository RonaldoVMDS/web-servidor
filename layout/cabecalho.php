<!-- Cabeçalho de todas as páginas -->
<nav class="navbar navbar-expand-md navbar-dark bg-success cabecalho">
    <div class="container">
        <a href="index.php" class="navbar-brand">
            <img src="img/Logo_RM-Sports.png" width="50" alt="">
        </a><!-- Logo -->
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav-principal"><!-- Configuração do menu mobile-->
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="nav-principal"><!-- Barra de navegação-->
            <ul class="navbar-nav flex-grow-1"><!-- Itens da barra de navegação -->
                <li class="nav-item">
                    <a href="index.php" class="nav-link text-white">Principal</a>
                </li>
                <li class="nav-item">
                    <a href="produtos.php" class="nav-link text-white">Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="contato.php" class="nav-link text-white">Entre em contato</a>
                </li>
            </ul> <!-- Itens da barra de navegação -->

            <ul class="navbar-nav"><!-- Itens da barra de navegação -->
                <li class="nav-item">
                    <a href="<?= verificaLink($Logado) ?>" class="nav-link text-white"><?= verificaCadastro($Logado)?></a><!-- Se logado => echo 'Sair' : senão => echo 'Quero me cadastrar' -->
                </li>
                <li class="nav-item">
                    <a href="login.php" class="nav-link text-white"><?= verificaUsuario($Logado) ?></a><!-- Se logado => echo #Nome do usuário : senão => echo 'Entrar' -->
                </li>
                <li class="nav-item">
                    <a href="carrinho.php" class="nav-link"><img src="img/shopping-cart.png" alt="Carrinho de Compras" width="20"></a>
                </li>
            </ul><!-- Itens da barra de navegação -->
        </div>
    </div>
</nav>