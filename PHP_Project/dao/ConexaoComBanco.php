<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConexaoComBanco
 *
 * @author luciano
 */
class ConexaoComBanco {
    private $conexao;
    
    public function __construct() {
        
    }
        
    public function iniciarConexao(){
        $dbname="EmpresaJovem";
        $usuario="root";
        $password="root";
        
        $this->conexao = mysql_connect("localhost",$usuario,$password);
        $banco = mysql_select_db($dbname,$this->conexao);
                
        if( (!$this->conexao) || (!$banco) )
            throw new Exception("Nao foi possivel estabelecer a conexao
                                com o banco de dados. Informe o Administrador.");
        
    }
    
    public function finalizarConexao(){
        mysql_close($this->conexao);
    }
}

?>
