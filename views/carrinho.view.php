<main class="container">
    <h1 class=" text-success my-2"><i class="fa-solid fa-cart-arrow-down fa"></i> Meu carrinho</h1>
    <?php
    $total = 0.00
    ?>
        <ul class="list-group mb-3">
            <li class="list-group-item py-3 border-success border-2">
            <?php foreach ($Carrinho->getCarrinho() as $prod) : ?>
                <div class="row g-3 border-bottom border-success border-2">
                    <div class="col-4 col-md-3 col-lg-2">
                        <img src="<?= $prod->img?>" alt="" class="img-fluid">
                    </div>
                    <div class="col-8 col-md-9 col-lg-7 col-xl-8 text-left align-self-center">
                        <h4>
                            <a class="text-decoration-none text-success" href=""><?= $prod->nome?></a>
                        </h4>
                        <h4>
                            <small class="text-secondary"><?= $prod->desc?></small>
                        </h4>
                    </div>
                    <div class="col-6 offset-3 col-md-4 offset-md-4 col-lg-3 offset-lg-0 col-xl-2 align-self-center mt-3">
                        <div class="input-group">
                            <button type="submit" class="btn btn-lg border-dark trash">
                                <i class="fa-solid fa-trash fa"></i>
                            </button>
                        </div>
                        <div class="text-right mt-2">
                        <small class="text-secondary">Quantidade: <?= $prod->quantidade?></small>
                            <small class="text-secondary d-block">Preço item: R$ <?= $prod->preco?></small>
                            <span class="text-dark d-block">Total Item: <?= $prod->preco * $prod->quantidade?></span>
                        </div>
                    </div>
                </div>
                <?php $total += $prod->preco * $prod->quantidade ?>
                <?php endforeach; ?>
                <div class="text-center m-4">
                    <h4>
                        Valor Total: R$ <?= $total;?>
                    </h4>
                    <a href="produtos.php" class="btn btn-outline-dark btn-lg">Continuar comprando</a>
                    <button class="btn btn-success btn-lg">Comprar do Carrinho</button>
                </div>

            </li>

        </ul>
    <ul class="list-group mb-3">
        <li class="list-group-item py-3 border-success border-2">
            <div class="row g-3">
                <div class="text-center align-self-center">
                    <h4>
                        <a class="text-decoration-none text-success" href="">
                            <h1>Não há produtos no carrinho.</h>
                        </a>
                    </h4>
                </div>
            </div>
            <div class="text-center m-4">
                <a href="produtos.php" class="btn btn-outline-dark btn-lg">Continuar comprando</a>
            </div>

        </li>

    </ul>
</main>