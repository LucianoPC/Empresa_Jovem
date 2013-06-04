<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ControlePessoa
 *
 * @author luciano
 */

//include("model/Person.php");


class ControlPerson {
    
    private $vectorPerson;
    private $controlPersonListener;    
    
    public function __construct() {
        $this->vectorPerson = new Vector();
    }
    
    public function getPersons(){
        return $this->vectorPerson->cloneVector();
    }
    
    public function getControlPersonListener(){
        return $this->controlPersonListener;
    }
    
    public function setControlPersonListener(ControlPersonListener $controlPersonListener){
        $this->controlPersonListener = $controlPersonListener;
    }
    
    private function add(Person $person){
        $this->vectorPerson->add_back($person);
    }
    
    private function remove(Person $person){
        $index = $this->vectorPerson->indexOf($person);
        $this->vectorPerson->remove($index);
    }
    
    
    
}

interface ControlPersonListener {
    public function onControlPersonChange(ControlPerson $controlPerson);
}

?>
