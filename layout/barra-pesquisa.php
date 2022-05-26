<!-- Barra de pesquisa -->
<div class="container">
    <div class="row">
        <div class="container my-2">
            <div class="col-md-8 offset-md-2">
                <form action="/produtos?search=pesquisa" class="justify-content-center">
                    <div class="input-group input-group">
                        <input type="text" class="form-control search" name="pesquisa" value="<?php $_GET['pesquisa'] ?? '' ?>" placeholder="Digite aqui o produto que procura">
                        <button class="btn btn-success">Buscar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>