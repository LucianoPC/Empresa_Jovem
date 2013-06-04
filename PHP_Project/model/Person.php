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
class Person {
    //put your code here
    
    private $name;
    private $gender;
    private $cpf;
    private $dateOfBirth;
    
    public function __construct($cpf) {
        $this->setCpf($cpf);
    }


    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getGender() {
        return $this->gender;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getDateOfBirth() {
        return $this->dateOfBirth;
    }

    public function setDateOfBirth($dateOfBirth) {
        $this->dateOfBirth = $dateOfBirth;
    }
    
}

?>
