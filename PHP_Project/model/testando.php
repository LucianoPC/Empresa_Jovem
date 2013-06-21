<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testando
 *
 * @author luciano
 */
class testando {
    //put your code here
}
class Produto{
 
  public $Id;
  public $Nome;
  public $Valor;
  public $Fornecedor;
 
  public function __construct($Id, $Nome, $Valor, $Fornecedor){
    $this->Id = $Id;
    $this->Nome = $Nome;
    $this->Valor = $Valor;
    $this->Fornecedor = $Fornecedor;
  }
 
}
 
class Fornecedor{
 
  public $Id;
  public $RazaoSocial;
  public $Endereco;
  public $Telefone;
 
  public function __construct($Id, $RazaoSocial, $Endereco, $Telefone){
    $this->Id = $Id;
    $this->RazaoSocial = $RazaoSocial;
    $this->Endereco = $Endereco;
    $this->Telefone = $Telefone;
  }
 
}
 
$fornecedor = new Fornecedor(359, "Mercado da Casa", "Rua B", "3232-2222" );
 
$produto = new Produto(122, "Café 250g", 2.85, $fornecedor );
 
echo "Código: " . $produto->Codigo . "< br />";
echo "Produto: " . $produto->Nome . "< br />";
echo "Fornecedor: " . $produto->Fornecedor->RazaoSocial . "< br />";

?>
