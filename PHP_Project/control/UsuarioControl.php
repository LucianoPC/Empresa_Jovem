<?php

include '../dao/UsuarioDAO.php';

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioControl
 *
 * @author luciano
 */
class UsuarioControl {
    
    private $usuarioDAO;
    
    public function __construct() {
        $this->usuarioDAO = new UsuarioDAO();
    }
    
    public function cadastrarUsuario($usuario){
        
    }
    
}

?>
