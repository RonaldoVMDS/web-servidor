<?php
//verifica e não permite acessar a tela do carrinho caso usuário não esteja logado, redireciona para o login
if (empty($_SESSION['logado']) || $_SESSION['logado'] == false) {
    header('Location: login.php');
}
$nome = $_GET['nome'] ?? '';
$img = $_GET['img'] ?? '';
$preco = $_GET['preco'] ?? '';
$desc = $_GET['desc'] ?? '';
$quantidade_p = 0;
$quantidade_m = 0;
$quantidade_g = 0;
$quantidade_gg = 0;
$nomeQuantidade = $_POST['opcoes'] ?? '';
$quantidade = $_POST['qtde'] ?? '';
switch($nomeQuantidade){
    case 'quantidade_p';
    $quantidade_p = $quantidade;
    break;
    case 'quantidade_m';
    $quantidade_m = $quantidade;
    break;
    case 'quantidade_g';
    $quantidade_g = $quantidade;
    break;
    case 'quantidade_gg';
    $quantidade_gg = $quantidade;
    break;
}

$idRemover = $_GET['removerCarrinho'] ?? '';

$id = $_GET['id_prod'] ?? '';
if (isset($_SESSION['produtos-carrinho'])) {
    $Carrinho = $_SESSION['produtos-carrinho'];
} else {
    $Carrinho = new Carrinho();
}

if (($nome != '' && $img != '' && $preco != '' && $desc != '' && $quantidade != '' && $id)) {
    $produto = new Produto($id, $nome, $img, $desc, $preco, $quantidade_p, $quantidade_m, $quantidade_g, $quantidade_gg);
    $Carrinho->insereProduto($produto, $nomeQuantidade);
    $_SESSION['produtos-carrinho'] = $Carrinho;
    header('Location: carrinho.php');
}

if($idRemover != ''){
    $Carrinho->removeProduto($idRemover);
}

require('views/carrinho.view.php');
