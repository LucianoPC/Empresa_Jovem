<?php


    function menuFazerLogin(){
        ?>
        <h4>
            <table>
                <form method="POST">
                    <tr>
                        <td> Usuário: </td>
                        <td> <input type="text" size="10" name="usuario" /> </td>
                    </tr>
                    <tr>
                        <td> Senha: </td>
                        <td> <input type="text" size="10" name="senha" /> </td>
                    </tr><tr>
                        <td></td>
                        <td> <div align="right"> <input value="login" type="submit"> </div> </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td> <div align="right"> <u> cadastre-se </u> </div> </td>
                    </tr>

                </form>
            </table>
        </h4>
        <?php
    }

?>
