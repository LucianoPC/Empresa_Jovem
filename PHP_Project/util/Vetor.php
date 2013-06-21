<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vetor
 *
 * @author luciano
 */
class Vetor {
    
    private $vetor;
    
    public function __construct() {
        $this->vetor = array();
    }
    
    public function adicionarNoFinal($elemento){
        $this->vetor[$this->tamanho()] = $elemento;
    }
    
    public function adicionarNoInicio($elemento){
        $indice = $this->tamanho();
        $this->adicionarNoFinal($elemento);
        $this->trocarElementoDoFinalAteOIndice(0);
    }
    
    public function adicionar($elemento, $indice){
        $this->validarIndice($indice);
        $this->adicionarNoFinal($elemento);
        $this->trocarElementoDoFinalAteOIndice($indice);
    }
    
    public function get($indice){
        return $this->vetor[$indice];
    }
    
    public function tamanho(){
        return count($this->vetor);
    }
    
    private function trocarElementos($indiceUm, $indiceDois){
        $temp = $this->vetor[$indiceUm];
        $this->vetor[$indiceUm] = $this->vetor[$indiceDois];
        $this->vetor[$indiceDois] = $temp;
    }
    
    public function contemIndice($indice){
        if($indice == 0)
            return true;
        foreach ($this->vetor as $chave => $valor) {
            if($chave == $indice)
                return true;
        }
        return false;
    }
    
    private function validarIndice($indice){
        if(!$this->contemIndice($indice)){
            $str = sprintf("Indice %d Invalido: O vetor nao possui esse Indice", $indice);
            throw new Exception($str);
        }
    }
    
    private function trocarElementoDoFinalAteOIndice($indice){
        $contador = $this->tamanho() - 1;
        while($contador > $indice){
            $this->trocarElementos($contador, $contador - 1);
            $contador--;
        }
    }
}

?>
