<?php

use Exception;

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VetorLista
 *
 * @author luciano
 */
class Vetor {
        
    private $vetorLista;
    
    public function __construct() {
        $this->vetorLista = array();
    }
    
    public function adicionarNoFinal($elemento){
        $this->vetorLista[$this->tamanho()] = $elemento;
    }
    
    public function adicionarNoInicio($elemento){
        $indice = $this->tamanho();
        $this->adicionarNoFinal($elemento);
        
        while($indice > 0){
            $temp = $this->vetorLista[$indice];
            $this->vetorLista[$indice] = $this->vetorLista[$indice-1];
            $this->vetorLista[$indice-1] = $temp;
            
            $indice--;
        }
    }
    
    public function remover($index){
        $this->validarExistenciaDoIndex($index);
        unset($this->vetorLista[$index]);
    }
    
    public function contemElemento($elemento){
        foreach ($this->vetorLista as $valor) {
            if($valor == $elemento)
                return true;
        }
        return false;
    }
    
    public function contemIndex($index){
        foreach ($this->vetorLista as $key => $valor) {
            if($key == $index)
                return true;
        }
        return false;
    }
    
    public function getIndexDoElemento($elemento){
        $this->validarExistenciaDoElemento($elemento);        
        foreach ($this->vetorLista as $chave => $valor){
            if($valor == $elemento)
                return $chave;
        }
    }
    
    public function getElementoNoIndex($index){
        return $this->vetorLista[$index];
    }

    public function tamanho(){
        return count($this->vetorLista);
    }
    
    public function imprimir(){
        echo "["; 
        for($indice = 0; $indice < $this->tamanho(); $indice++){
            echo $this->getElementoNoIndex($indice);
            if($indice != $this->tamanho()-1)
                echo ", ";
        }
        echo "]";
    }
    
    public function reverter(){
        $vetorRevertido = array();
        foreach ($this->vetorLista as $key=>$valor){
            $vetorRevertido[($this->tamanho()-1) - $key] = $valor;
        }
        $this->vetorLista = $vetorRevertido;
    }
    
    /*
    public function reverter(){
        $vetorRevertido = new Vetor();
        foreach ($this->vetorLista as $valor){
            $vetorRevertido->adicionarNoInicio($valor);
            printf("vetorRevertido[0]: %d <br>", $vetorRevertido->getElementoNoIndex(0));
        }
        return $vetorRevertido;
    }
    */
    
    private function validarExistenciaDoElemento($elemento){
        if(!$this->contemElemento($elemento)){
            $str = sprintf("Elemento %d Invalido: Elemento Inexistente", $elemento);
            throw new Exception($str);
        }
    }
    
    private function validarExistenciaDoIndex($index){
        if(!$this->contemIndex($index)){
            $str = sprintf("Index %d Invalido: O vetor nao possui esse Index", $index);
            throw new Exception($str);
        }
    }
}

?>
