<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author luciano
 */
class Pessoa {
    //put your code here
    
    const NOME = "Nome";
    
    private $nome;
    private $sexo;
    private $cpf;
    
    public function __construct($nome, $sexo, $cpf){
        $this->setNome($nome);
        $this->setSexo($sexo);
        $this->setCpf($cpf);
    }
    
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
    
}

?>
