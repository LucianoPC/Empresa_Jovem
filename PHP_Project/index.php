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
        
            $dbname="EmpresaJovem";
            $usuario="root";
            $password="root";

            //Conecta ao servidor MySQL. mysql_connect ' Abre uma conexão com um BD MySQL
            if(!($id = mysql_connect("localhost",$usuario,$password))) {
              echo "<p align=\"center\"><big><strong>Não foi possível estabelecer uma conexão   com o gerenciador MySQL. Favor Contactar o Administrador.
              </strong></big></p>";
              exit;
            }

            //Seleciona o Banco de Dados. mysql_select_db ' Seleciona um banco de dados MySQL.

            if(!($con=mysql_select_db($dbname,$id))) {
              echo " <p align=\"center\"><big><strong>Não foi possível estabelecer uma conexão   com o gerenciador MySQL. Favor Contactar o Administrador.
              </strong></big></p>";
              exit;
            }
        
            
            echo "Conexão do banco aberta com sucesso<br>";
            
            /*
            mysql_query("INSERT INTO  `EmpresaJovem`.`Usuario` (
                        `login` ,
                        `senha` ,
                        `cpf` ,
                        `nome` ,
                        `dataNascimento` ,
                        `sexo` ,
                        `telefone` ,
                        `email`
                        )
                        VALUES (
                        'lucianopc',  '123',  '11111',  'luciano',  '2013-08-13',  'M',  '123213',  'asdasd'
                        );");
             * 
             */
            
            $sqlCliente = mysql_query("SELECT * FROM `Usuario`");
            
            echo "<br> numero de linhas: ", mysql_num_rows($sqlCliente);
            
            echo "<br> usuario: ", mysql_result($sqlCliente, 0, "login");
            
            
            mysql_close($id);
            
            echo "<br>Conexão do banco fechada com sucesso";
            
            
            
            //header("Location: view/PaginaInicial.php");
        ?>
    </body>
</html>
