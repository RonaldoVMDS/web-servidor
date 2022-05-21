<?php

class Produto{
    private $id;
    private $nome;
    private $img;
    private $desc;
    private $preco;
    private $quantidade_p;
    private $quantidade_m;
    private $quantidade_g;
    private $quantidade_gg;

    public function __construct($id, $nome, $img, $desc, $preco, $quantidade_p, $quantidade_m, $quantidade_g, $quantidade_gg){
        $this->id = $id;
        $this->nome = $nome;
        $this->img = $img;
        $this->desc = $desc;
        $this->preco = $preco;
        $this->quantidade_p = $quantidade_p;
        $this->quantidade_m = $quantidade_m;
        $this->quantidade_g = $quantidade_g;
        $this->quantidade_gg = $quantidade_gg;
    }

    public function addQuant($tamanho, $value)
  {
    return $this->$tamanho += $value;
  }

    public function __get($produtoInfo)
    {
        return $this->$produtoInfo;
    }
};