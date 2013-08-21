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
            include './control/UsuarioControl.php';
            include './exception/ValidacaoException.php';
            include './model/validacao/UsuarioValidacao.php';
            
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
            
            $usuarioControl = new UsuarioControl();
            
            $usuarioValidacao = new UsuarioValidacao();
            
            $login = "loginUsuario";
            $usuarioValidacao->validarCaracteresLogin($login);
            
            
            //$usuarioDAO->cadastrarUsuario($usuario);
            
            echo "<br>";
            
            $data = date("Y-m-d", mktime (0, 0, 0, date("m"),  date("d"),  date("Y")-80));
            $data2 = date("Y-m-d", mktime (0, 0, 0, date("m"),  date("d"),  date("Y")-13));
            echo $data, "<br>";
            echo $data2;
            
            echo '<input type="text" id="calendario" />
                 <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
                <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
                <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

                <script>
                
                $(function() {
                    $( "#calendario" ).datepicker({
                        changeMonth: true,
                        changeYear: true,
                        showOn: "button",
                        buttonImage: "calendario.png",
                        buttonImageOnly: true,
                        showOtherMonths: true,',"
                        dateFormat: 'dd/mm/yy',
                        dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado','Domingo'],
                        dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
                        dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
                        monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
                        monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez']
                    });
                });

                </script>
                ";
            
            echo "<br> Tudo Funcionando! <br>";
            
        ?>
    </body>
</html>
