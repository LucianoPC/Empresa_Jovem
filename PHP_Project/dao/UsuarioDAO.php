<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDAO
 *
 * @author luciano
 */
//include 'ConexaoComBanco.php';
//include 'model/Usuario.php';
class UsuarioDAO {
        
    public function __construct() {
        
    }
    
    public function cadastrarUsuario($usuario){
        $conexaoComBanco = new ConexaoComBanco();
        $stringQuery = $this->getQueryDeInsercao($usuario);
        $conexaoComBanco->iniciarConexao();    
        $resultado = mysql_query($stringQuery);      
        $conexaoComBanco->finalizarConexao();
    }
    
    private function getQueryDeInsercao($usuario){
        $stringQuery = "INSERT INTO `Usuario` VALUES (";
        $stringQuery .= "'" . $usuario->getLogin() . "', ";
        $stringQuery .= "'" . $usuario->getSenha() . "', ";
        $stringQuery .= "'" . $usuario->getCpf() . "', ";
        $stringQuery .= "'" . $usuario->getNome() . "', ";
        $stringQuery .= "'" . $usuario->getDataNascimento() . "', ";
        $stringQuery .= "'" . $usuario->getSexo() . "', ";
        $stringQuery .= "'" . $usuario->getTelefone() . "', ";
        $stringQuery .= "'" . $usuario->getEmail() . "')";
        
        return $stringQuery;
    }
    
}

?>
