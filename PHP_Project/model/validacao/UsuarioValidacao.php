<?php

include '../../exception/ValidacaoException.php';
include 'Validacao.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioValidacao
 *
 * @author luciano
 */
class UsuarioValidacao {
    
    const CARACTERES_ALFA_NUMERICOS = "qwertyuiopasdfghjklzxcvbnm0123456789";
    const CARACTERES_ALFABETO = "qwertyuiopasdfghjklzxcvbnm";
    
    const TAMANHO_MAXIMO_LOGIN = 20;
    const TAMANHO_MINIMO_LOGIN = 3;    
    private $ERRO_CARACTERES_LOGIN = "Erro, o login deve conter apenas caracteres
                                      alfa-numericos [(a-Z) (0-9)].
                                      \n Caracteres invalidos: ";
    private $ERRO_TAMANHO_LOGIN = "Erro, o numero de caracteres (tamanho) do
                                   login esta invalido.
                                   \n O numero de caracteres do login deve estar
                                   no seguinte intervalo: ";

    const TAMANHO_MAXIMO_SENHA = 20;
    const TAMANHO_MINIMO_SENHA = 6;
    private $ERRO_CARACTERES_SENHA = "Erro, a senha deve conter apenas caracteres
                                      alfa-numericos [(a-Z) (0-9)].
                                      \n Caracteres invalidos: ";
    private $ERRO_TAMANHO_SENHA = "Erro, o numero de caracteres (tamanho) da
                                   senha esta invalido.
                                   \n O numero de caracteres da senha deve estar
                                   no seguinte intervalo: ";
    
    
    const TAMANHO_MAXIMO_NOME = 50;
    const TAMANHO_MINIMO_NOME = 3;
    private $ERRO_CARACTERES_NOME = "Erro, o nome deve conter apenas caracteres
                                      do Alfabeto (a-Z).
                                      \n Caracteres invalidos: ";
    private $ERRO_TAMANHO_NOME = "Erro, o numero de caracteres (tamanho) do
                                   nome esta invalido.
                                   \n O numero de caracteres da senha deve estar
                                   no seguinte intervalo: ";
    
    const IDADE_MAXIMA = 75;
    const IDADE_MINIMA = 13;
    
    
    
    private $validacao;
    
    function __construct() {
        $this->validacao = new Validacao();
    }

    
    public function validarCaracteresLogin($login){
        try{
            $this->validacao->validarCaracteres($login, self::CARACTERES_ALFA_NUMERICOS);
        } catch(ValidacaoException $e){
            throw new ValidacaoException($this->ERRO_CARACTERES_LOGIN, $e->getMessage());
        }
    }
    
    public function validarTamanhoLogin($login){
        try{
            $this->validacao->validarNumeroDeCaracteres($login, 
                    self::TAMANHO_MINIMO_LOGIN, self::TAMANHO_MAXIMO_LOGIN);
        } catch(ValidacaoException $e){
            throw new ValidacaoException($this->ERRO_TAMANHO_LOGIN, $e->getMessage());
        }
    }
    
    public function validarCaracteresSenha($senha){
        try{
            $this->validacao->validarCaracteres($senha, self::CARACTERES_ALFA_NUMERICOS);
        } catch(ValidacaoException $e){
            throw new ValidacaoException($this->ERRO_CARACTERES_SENHA, $e->getMessage());
        }
    }
    
    public function validarTamanhoSenha($senha){
        try{
            $this->validacao->validarNumeroDeCaracteres($senha, 
                    self::TAMANHO_MINIMO_SENHA, self::TAMANHO_MAXIMO_SENHA);
        } catch(ValidacaoException $e){
            throw new ValidacaoException($this->ERRO_TAMANHO_SENHA, $e->getMessage());
        }
    }
    
    public function validarCaracteresNome($nome){
        try{
            $this->validacao->validarCaracteres($nome, self::CARACTERES_ALFABETO);
        } catch(ValidacaoException $e){
            throw new ValidacaoException($this->ERRO_CARACTERES_NOME, $e->getMessage());
        }
    }
    
    public function validarTamanhoNome($nome){
        try{
            $this->validacao->validarNumeroDeCaracteres($nome, 
                    self::TAMANHO_MINIMO_NOME, self::TAMANHO_MAXIMO_NOME);
        } catch(ValidacaoException $e){
            throw new ValidacaoException($this->ERRO_TAMANHO_NOME, $e->getMessage());
        }
    }
    
    public function validarData($data){
        $menorData = date("Y-m-d", mktime (0, 0, 0, date("m"),
                date("d"), date("Y") - self::IDADE_MINIMA));
        $maiorData = date("Y-m-d", mktime (0, 0, 0, date("m"),
                date("d"), date("Y") - self::IDADE_MAXIMA));
        
        $this->validacao->validarIntervalo($data, $menorData, $maiorData);
    }
    
}

?>
