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
            include 'Moldura.php';
            
            iniciarPagina();
        ?>
        
        <h1> Cadastrar-se </h1>
        
        <h3>
            <form method="POST">
                <table>
                    <tr>
                        <td> Usuario: </td>
                        <td> <input type="text" size="30" name="nome" /> </td> 
                    </tr>
                    <tr>
                        <td> Senha: </td>
                        <td> <input type="password" size="30" name="nome" /> </td> 
                    </tr>
                    <tr>
                        <td> Confirmar Senha: </td>
                        <td> <input type="password" size="30" name="nome" /> </td> 
                    </tr>
                    <tr>
                        <td> <br> </td> 
                        <td> <br> </td>
                    </tr>
                    <tr>
                        <td> Nome: </td> 
                        <td> <input type="text" size="30" name="nome" /> </td>
                    </tr>
                    <tr>
                        <td> Data de Nascimento: </td> 
                        <td> <input type="text" size="30" name="nome" /> </td>
                    </tr>
                    <tr>
                        <td> Sexo: </td> 
                        <td> 
                            <select size="1" name = "sexo">
                                <option>  </option>
                                <option> Masculino </option>
                                <option> Feminino </option>
                            </select>
                        </td>
                    </tr>
                    
                </table>
            </from>
        </h3>
        
        
        
        <?php
            encerrarPagina();
        ?>
    </body>
</html>
