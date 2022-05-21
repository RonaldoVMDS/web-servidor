<?php 

class Produto{
    private $id;
    private $nome;
    private $img;
    private $desc;
    private $preco;
    private $quantidade;

    public function __construct($id, $nome, $img, $desc, $preco, $quantidade){
        $this->id = $id;
        $this->nome = $nome;
        $this->img = $img;
        $this->desc = $desc;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }
};