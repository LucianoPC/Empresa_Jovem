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
    
    
    public function __construct() {
        
    }
    
    public function iniciarConexao(){
        $dbname="EmpresaJovem";
        $usuario="root";
        $password="root";
        
        $conexao = mysql_connect("localhost",$usuario,$password);
        
        if(!$conexao)
            throw new Exception("Nao foi possivel estabelecer a conexao
                                com o banco de dados. Informe o Administrador.");
        
        return $conexao;
    }
    
    public function finalizarConexao($conexao){
        mysql_close($conexao);
    }
    
}

?>
