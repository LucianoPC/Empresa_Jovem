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
class Vector {
        
    private $vectorArray;
    
    public function __construct() {
        $this->vectorArray = array();
    }
    
    public function add_back($element){
        $this->push_back($element);
    }
    
    public function add($index, $element){
        $this->push($index, $element);
    }
    
    public function add_front($element){
        $this->push_front($element);
    }
    
    
    public function push_back($element){
        $this->vectorArray[$this->size()] = $element;
    }
    
    public function push($index, $element){
        $this->validateIsIndex($index);
        $count = $this->size();
        $this->push_back($element);
        
        while($count > $index){
            $this->swapElements($count, $count - 1);
            $count--;
        }
    }
    
    public function push_front($element){
        $index = $this->size();
        $this->push_back($element);
        
        while($index > 0){
            $this->swapElements($index, $index - 1);
            $index--;
        }
    }
    
    public function remove($index){
        $this->validateIsIndex($index);
        while($index < ($this->size() - 1)){
            $this->swapElements($index, $index+1);
            $index++;
        }
        unset($this->vectorArray[($this->size() - 1)]);
        
    }
    
    public function contains($element){
        foreach ($this->vectorArray as $value) {
            if($value == $element)
                return true;
        }
        return false;
    }
    
    public function containsIndex($index){
        foreach ($this->vectorArray as $key => $value) {
            if($key == $index)
                return true;
        }
        return false;
    }
    
    public function indexOf($element){
        $this->validateIsElement($element);        
        foreach ($this->vectorArray as $chave => $valor){
            if($valor == $element)
                return $chave;
        }
    }
    
    public function get($index){
        return $this->vectorArray[$index];
    }
    
    public function set($index, $element){
        $this->validateIsIndex($index);
        $this->vectorArray[$index] = $element;
    }

    public function size(){
        return count($this->vectorArray);
    }
    
    public function printValues(){
        echo "["; 
        for($indice = 0; $indice < $this->size(); $indice++){
            echo $this->get($indice);
            if($indice != $this->size()-1)
                echo ", ";
        }
        echo "]";
    }
    
    public function toString(){
        $string = "["; 
        for($indice = 0; $indice < $this->size(); $indice++){
            $string .= $this->get($indice);
            if($indice != $this->size()-1)
                $string .= ", ";
        }
        $string .= "]";
        
        return $string;
    }
    
    public function reverseOrder(){
        $vetorRevertido = array();
        foreach ($this->vectorArray as $key=>$value){
            $vetorRevertido[($this->size()-1) - $key] = $value;
        }
        $this->vectorArray = $vetorRevertido;
    }
    
    public function subVector($fromIndex, $toIndex){
        $subVector = new Vector();
        for($index = $fromIndex; $index <= $toIndex; $index++)
            $subVector->push_back($this->get($index));
        
        return $subVector;
    }
    
    public function cloneVector(){
        $cloneVector = new Vector();
        for($index = 0; $index < $this->size(); $index++)
            $cloneVector->add($this->get($index));
        
        return $cloneVector;
    }
    
    public function equals(Vector $vector){
        if($this->size() != $vector->size())
            return false;
        
        for($index = 0; $index < $this->size(); $index++){
            if($this->get($index) != $vector->get($index))
                return false;
        }
        
        return true;
    }
    
    public function toArray(){
        $vetorArray = array();
        foreach ($this->vectorArray as $key=>$value){
            $vetorArray[$key] = $value;
        }
        return $vetorArray;
    }
    
    private function validateIsElement($elemento){
        if(!$this->contains($elemento)){
            $str = sprintf("Elemento %d Invalido: Elemento Inexistente", $elemento);
            throw new Exception($str);
        }
    }
    
    private function validateIsIndex($index){
        if(!$this->containsIndex($index)){
            $str = sprintf("Index %d Invalido: O vetor nao possui esse Index", $index);
            throw new Exception($str);
        }
    }
    
    private function swapElements($indexOne, $indexTwo){
        $temp = $this->vectorArray[$indexOne];
        $this->vectorArray[$indexOne] = $this->vectorArray[$indexTwo];
        $this->vectorArray[$indexTwo] = $temp;
    }
}

?>
