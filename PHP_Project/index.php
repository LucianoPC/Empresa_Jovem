<?php
ob_start();
session_start();
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            include 'model/Usuario.php';
            include 'dao/UsuarioDAO.php';
            include 'dao/ConexaoComBanco.php';
            include 'view/PainelCadastrarUsuario.php';
            
            $login = "LucianoPCbr";
            $senha = "321";
            $cpf = "222";
            $nome = "Luciano";
            $dataNascimento = "1992-08-13";
            $sexo = 'M';
            $telefone = "123321";
            $email = "lucianopcbr@hotmail.com";
            
            $usuario = new Usuario($login, $senha);
            $usuario->setNome($nome);
            $usuario->setDataNascimento($dataNascimento);
            $usuario->setSexo($sexo);
            $usuario->setTelefone($telefone);
            $usuario->setEmail($email);
            
            echo "<br>", $usuario->toString(), "<br>";
            
            $usuarioDAO = new UsuarioDAO();
            
            $usuarioDAO->cadastrarUsuario($usuario);
            
            
            echo "<br> Tudo Funcionando! <br>";
            
        ?>
    </body>
</html>
