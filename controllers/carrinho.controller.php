<?php
//verifica e não permite acessar a tela do carrinho caso usuário não esteja logado, redireciona para o login
if (empty($_SESSION['logado']) || $_SESSION['logado'] == false) {
    header('Location: login.php');
}


$nome = $_GET['nome'] ?? '';
$img = $_GET['img'] ?? '';
$preco = $_GET['preco'] ?? '';
$desc = $_GET['desc'] ?? '';
$quantidade = $_POST['qtde'] ?? '';
$id = $_GET['id_prod'] ?? '';
if (isset($_SESSION['produtos-carrinho'])) {
    $Carrinho = $_SESSION['produtos-carrinho'];
} else {
    $Carrinho = new Carrinho();
}
if (($nome != '' && $img != '' && $preco != '' && $desc != '' && $quantidade != '' && $id)) {
    $produto = new Produto($id, $nome, $img, $desc, $preco, $quantidade);
    $Carrinho->insereProduto($produto);
    $_SESSION['produtos-carrinho'] = $Carrinho;
    header('Location: carrinho.php');
}
require('views/carrinho.view.php');
