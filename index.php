<?php 

require 'vendor/autoload.php';

use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', "produtosPrincipaisController@paginaProdutosPrincipais");
Router::get('/contato', "contatoController@paginaContato");
Router::get('/produtos', "produtosController@paginaProdutos");
Router::post('/produtos', "produtosController@paginaProdutos");
Router::post('/produto', "produtoController@paginaProduto");
Router::get('/produto', "produtoController@paginaProduto");
Router::get('/cadastro', "cadastroController@paginaCadastro");
Router::post('/cadastro', "cadastroController@paginaCadastro");
Router::start();