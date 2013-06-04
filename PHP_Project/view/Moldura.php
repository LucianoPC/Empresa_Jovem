<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <LINK REL="STYLESHEET" HREF="MyCSS.css" TYPE="text/css">
        <title></title>
    </head>
    <body>
        
        <?php
            include 'MenuLogin.php';
        ?>
        
        <?php
        
            function iniciarPagina(){
                ?>
                <div id="container">
            
                <div id="container_topo">
                    <h3> Empresa Ação Missionária </h3>
                </div>


                <div id="container_menu">


                    <div id="container_menu_item">
                        <form method="POST">
                            <?php menuFazerLogin(); ?>
                        </form>
                    </div>


                    <div id="container_menu_item">
                        <h3> Item 02 </h3>
                    </div>                
                    <div id="container_menu_item">
                        <h3> Item 03 </h3>
                    </div>                
                    <div id="container_menu_item">
                        <h3> Item 04 </h3>
                    </div>
                </div>


                <div id="container_principal">
        
            <?php
            }
            
            function encerrarPagina(){
                ?>
                        </div>

                </div>
        
                <?php
            }
        
        ?>
    </body>
</html>
