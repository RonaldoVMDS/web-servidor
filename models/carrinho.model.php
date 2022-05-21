<?php
class Carrinho{
  private $Carrinho = Array();

  public function __construct() {

  }

  public function insereProduto($_produto, $tamanho) {
    $duplicated = false;
    for($i = 0; $i< sizeof($this->Carrinho); $i++){
        if($this->Carrinho[$i]->id == $_produto->id){
          $duplicated=true;
          $this->Carrinho[$i]->addQuant($tamanho, $_produto->$tamanho);
        }
    }
    if($duplicated == false){
      $this->Carrinho[] = $_produto;
    }
    
  }

  public function removeProduto($id){
    for($i = 0; $i < sizeof($this->Carrinho); $i++){
      if($this->Carrinho[$i]->id == $id){
        unset($this->Carrinho[$i]);
        sort($this->Carrinho);
        header('Location: carrinho.php');
      }
  }
  }

  public function getCarrinho () {
    return $this->Carrinho;
  }
}
