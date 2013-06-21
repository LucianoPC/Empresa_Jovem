<?php


/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author luciano
 */
class Usuario {
    
    private $login;
    private $senha;
    private $pessoa;
    
    
    public function __construct($login, $senha, \Pessoa $pessoa) {
        $this->setLogin($login);
        $this->setSenha($senha);
        $this->setPessoa($pessoa);
    }    

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getPessoa() {
        return $this->pessoa;
    }

    public function setPessoa(\Pessoa $pessoa) {
        $this->pessoa = $pessoa;
    }


}

?>
