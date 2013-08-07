<?php

use Exception;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioDAO
 *
 * @author luciano
 */

class UsuarioDAO {
    
    
    private $ERRO_CADASTRAR = "Nao foi possivel cadastrar o usuario.
                                    Informe o Administrador.";
    
    public function __construct() {
        
    }
    
    public function cadastrarUsuario($usuario){
        $conexaoComBanco = new ConexaoComBanco();
        $query = $this->getQueryDeInsercao($usuario);
        $conexaoComBanco->iniciarConexao();
        $resultado = mysql_query($query);
        $conexaoComBanco->finalizarConexao();
        
        if(!$resultado)
            throw new Exception($this->ERRO_CADASTRAR);
    }
    
    private function getQueryDeInsercao($usuario){
        $query = "INSERT INTO `t_usuario` VALUES (";
        $query .= "'" . $usuario->getLogin() . "', ";
        $query .= "'" . $usuario->getSenha() . "', ";
        $query .= "'" . $usuario->getNome() . "', ";
        $query .= "'" . $usuario->getDataNascimento() . "', ";
        $query .= "'" . $usuario->getSexo() . "', ";
        $query .= "'" . $usuario->getTelefone() . "', ";
        $query .= "'" . $usuario->getEmail() . "')";
        
        return $query;
    }
    
}

?>
