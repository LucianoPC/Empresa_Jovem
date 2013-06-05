<?php


    function menuFazerLogin(){
                
        $dominio= $_SERVER['HTTP_HOST'];
        $url = "http://" . $dominio. $_SERVER['REQUEST_URI'];

        ?>
        <h4>
            <form action="PaginaInicial.php" method="POST"></form>

            <form action="<?php echo $url;?>" method="POST">

                <?php camposLogin(); ?>

                <div align="right"> <a href="Cadastrarse.php"> <u> cadastre-se </u> </a> </div>

                <div align="right"> <input value="Login" type="submit"> </div>

            </form>

        </h4>
        <?php
    }


    function camposLogin(){
        ?>
            <table>
                <tr>
                    <td> Usuário: </td>
                    <td> <input type="text" size="10" name="usuario" /> </td>
                </tr>
                <tr>
                    <td> Senha: </td>
                    <td> <input type="text" size="10" name="senha" /> </td>
                </tr><tr>
            </table>
        <?php
    }

?>
