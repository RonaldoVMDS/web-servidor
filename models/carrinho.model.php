<?php
class Carrinho
{
  private $Carrinho = array();

  public function __construct()
  {
  }

  public function insereProduto($_produto, $tamanho)
  {
    $duplicated = false;
    for ($i = 0; $i < sizeof($this->Carrinho); $i++) {
      if ($this->Carrinho[$i]->id == $_produto->id) {
        $duplicated = true;
        $this->Carrinho[$i]->addQuant($tamanho, $_produto->$tamanho);
      }
    }
    if ($duplicated == false) {
      $this->Carrinho[] = $_produto;
    }
  }

  public function removeProduto($id)
  {
    for ($i = 0; $i < sizeof($this->Carrinho); $i++) {
      if ($this->Carrinho[$i]->id == $id) {
        unset($this->Carrinho[$i]);
        sort($this->Carrinho);
        header('Location: carrinho.php');
      }
    }
  }

  public function getProdCarrinho($id)
  {
    for ($i = 0; $i < sizeof($this->Carrinho); $i++) {
      if ($this->Carrinho[$i]->id == $id) {
        return $this->Carrinho[$i]->quantidade_p + $this->Carrinho[$i]->quantidade_m + $this->Carrinho[$i]->quantidade_g + $this->Carrinho[$i]->quantidade_gg;
      }
    }
  }

  public function insereProdutoMaxQuant($_produto, $produtoBD, $tamanho, $tamanhoBD)
  {
    $duplicated = false;
    for ($i = 0; $i < sizeof($this->Carrinho); $i++) {
      if ($this->Carrinho[$i]->id == $produtoBD->id_produto) {
        $duplicated = true;
        $this->Carrinho[$i]->addQuantMax($tamanho, $produtoBD->$tamanhoBD);
      }
    }
    if ($duplicated == false) {
      $this->Carrinho[] = $_produto;
      for ($i = 0; $i < sizeof($this->Carrinho); $i++) {
        if ($this->Carrinho[$i]->id == $produtoBD->id_produto) {
          $duplicated = true;
          $this->Carrinho[$i]->addQuantMax($tamanho, $produtoBD->$tamanhoBD);
        }
      }
    }
  }

  public function getCarrinho()
  {
    return $this->Carrinho;
  }
}
