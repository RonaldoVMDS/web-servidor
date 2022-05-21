<?php
class Carrinho {
  private $Carrinho = Array();

  public function __construct() {

  }

  public function insereProduto($_produto) {
    $this->Carrinho[] = $_produto;
    
  }

  public function getCarrinho () {
    return $this->Carrinho;
  }
}
