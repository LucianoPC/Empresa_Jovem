<?php

require_once dirname(__FILE__) . '/../../../model/validacao/UsuarioValidacao.php';
include '../../../exception/ValidacaoException.php';

/**
 * Test class for UsuarioValidacao.
 * Generated by PHPUnit on 2013-08-20 at 09:20:46.
 */
class UsuarioValidacaoTest extends PHPUnit_Framework_TestCase {

    /**
     * @var UsuarioValidacao
     */
    protected $usuarioValidacao;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->usuarioValidacao = new UsuarioValidacao();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers UsuarioValidacao::validarCaracteresLogin
     * @todo Implement testeCaracteresValidosLogin().
     */
    public function testeCaracteresValidosLogin() {
        $login = "UsUaRiO";
        $this->usuarioValidacao->validarCaracteresLogin($login);
    }
    
    /**
     * @expectedException ValidacaoException
     * @covers UsuarioValidacao::validarCaracteresLogin
     * @todo Implement testeCaracteresInvalidosLogin().
     */
    public function testeCaracteresInvalidosLogin() {
        $login = "UsUaRiOç";
        $this->usuarioValidacao->validarCaracteresLogin($login);
    }
    
    /**
     * @covers UsuarioValidacao::validarTamanhoLogin
     * @todo Implement testeTamanhoLoginValido().
     */
    public function testeTamanhoLoginValido() {
        $login = "UsUaRiO";
        $this->usuarioValidacao->validarTamanhoLogin($login);
    }
    
    /**
     * @expectedException ValidacaoException
     * @covers UsuarioValidacao::validarTamanhoLogin
     * @todo Implement testeTamanhoLoginInvalidoNoTamanhoMinimo().
     */
    public function testeTamanhoLoginInvalidoNoTamanhoMinimo() {
        $login = "Us";
        $this->usuarioValidacao->validarTamanhoLogin($login);
    }
    
    /**
     * @expectedException ValidacaoException
     * @covers UsuarioValidacao::validarTamanhoLogin
     * @todo Implement testeTamanhoLoginInvalidoNoTamanhoMaximo().
     */
    public function testeTamanhoLoginInvalidoNoTamanhoMaximo() {
        $login = "Usqsdfrgdfsdawedscdfg";
        $this->usuarioValidacao->validarTamanhoLogin($login);
    }

    /**
     * @covers UsuarioValidacao::validarCaracteresSenha
     * @todo Implement testeCaracteresValidosSenha().
     */
    public function testeCaracteresValidosSenha() {
        $senha = "abc123";
        $this->usuarioValidacao->validarCaracteresLogin($senha);
    }
    
    /**
     * @expectedException ValidacaoException
     * @covers UsuarioValidacao::validarCaracteresSenha
     * @todo Implement testeCaracteresInvalidosSenha().
     */
    public function testeCaracteresInvalidosSenha() {
        $senha = "abc123@";
        $this->usuarioValidacao->validarCaracteresSenha($senha);
    }
    
    /**
     * @covers UsuarioValidacao::validarTamanhoSenha
     * @todo Implement testeTamanhoSenhaValido().
     */
    public function testeTamanhoSenhaValido() {
        $senha = "jkf34j5";
        $this->usuarioValidacao->validarTamanhoSenha($senha);
    }
    
    /**
     * @expectedException ValidacaoException
     * @covers UsuarioValidacao::validarTamanhoSenha
     * @todo Implement testeTamanhoSenhaInvalidoNoTamanhoMinimo().
     */
    public function testeTamanhoSenhaInvalidoNoTamanhoMinimo() {
        $senha = "Us4f";
        $this->usuarioValidacao->validarTamanhoSenha($senha);
    }
    
    /**
     * @expectedException ValidacaoException
     * @covers UsuarioValidacao::validarTamanhoSenha
     * @todo Implement testeTamanhoSenhaInvalidoNoTamanhoMaximo().
     */
    public function testeTamanhoSenhaInvalidoNoTamanhoMaximo() {
        $senha = "Usqsdfrgdfs4567dgh53456";
        $this->usuarioValidacao->validarTamanhoLogin($senha);
    }
    
    /**
     * @covers UsuarioValidacao::validarCaracteresNome
     * @todo Implement testeCaracteresValidosNome().
     */
    public function testeCaracteresValidosNome() {
        $nome = "Nome";
        $this->usuarioValidacao->validarCaracteresNome($nome);
    }
    
    /**
     * @expectedException ValidacaoException
     * @covers UsuarioValidacao::validarCaracteresNome
     * @todo Implement testeCaracteresInvalidosNome().
     */
    public function testeCaracteresInvalidosNome() {
        $login = "Nome01";
        $this->usuarioValidacao->validarCaracteresNome($login);
    }
    
    /**
     * @covers UsuarioValidacao::validarTamanhoNome
     * @todo Implement testeTamanhoNomeValido().
     */
    public function testeTamanhoNomeValido() {
        $nome = "Nome";
        $this->usuarioValidacao->validarTamanhoNome($nome);
    }
    
    /**
     * @expectedException ValidacaoException
     * @covers UsuarioValidacao::validarTamanhoNome
     * @todo Implement testeTamanhoNomeInvalidoNoTamanhoMinimo().
     */
    public function testeTamanhoNomeInvalidoNoTamanhoMinimo() {
        $nome = "No";
        $this->usuarioValidacao->validarTamanhoNome($nome);
    }
    
    /**
     * @expectedException ValidacaoException
     * @covers UsuarioValidacao::validarTamanhoNome
     * @todo Implement testeTamanhoNomeInvalidoNoTamanhoMaximo().
     */
    public function testeTamanhoNomeInvalidoNoTamanhoMaximo() {
        $nome = "Usqsdfrgdfsdawedscdfgjguthfndhrytuyhajshdyanekhjtiajsudhcfka";
        $this->usuarioValidacao->validarTamanhoNome($nome);
    }

}

?>
