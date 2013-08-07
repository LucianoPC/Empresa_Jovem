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
    private $nome;
    private $dataNascimento;
    private $sexo;
    private $telefone;
    private $email;
    
    
    public function __construct($login, $senha) {
        $this->setLogin($login);
        $this->setSenha($senha);
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

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }

    public function setDataNascimento($dataNascimento) {
        $this->dataNascimento = $dataNascimento;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function toString(){
        $informacoes = "[login: " . $this->login;
        $informacoes .= ", senha: " . $this->senha;
        $informacoes .= ", cpf: " . $this->cpf;
        $informacoes .= ", nome: " . $this->nome;
        $informacoes .= ", data de nascimento: " . $this->dataNascimento;
        $informacoes .= ", sexo: " . $this->sexo;
        $informacoes .= ", telefone: " . $this->telefone;
        $informacoes .= ", email: " . $this->email . "]";
        
        return $informacoes;
    }

}

?>
