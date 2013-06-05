<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <style type="text/css">
            
            ul{
                list-style-type: none;
            }
            
            /*MENU NIVEL 1*/
            div#nav ul {margin-top:6px;}
            div#nav ul a{color:#fff; font:13px "Trebuchet MS", Calibri, Arial, Tahoma; font-size:13px; text-decoration:none; list-style:none; z-index:50;}
            div#nav ul.nivel_1 li.select{height:33px; width:auto; z-index:50;}
            div#nav ul.nivel_1 li{float:left; padding:0 1px; width:75px; text-align:center; border-right:1px solid #c66;z-index:50;}
            div#nav ul.nivel_1 li a{display:block; height:20px; line-height:20px; z-index:50;}
            div#nav ul.nivel_1 li:hover{background:#29383A; z-index:50;}
            
            /*MENU NIVEL 2*/
            div#nav ul.nivel_1 li ul{display:none; padding-top:5px; z-index:50;}
            div#nav ul.nivel_1 li:hover ul.nivel_2{display:block; z-index:50;}
            div#nav ul.nivel_1 li a ul.nivel_2{display:block; z-index:50;}

            div#nav ul.nivel_2{position:relative; z-index:50;}
            div#nav ul.nivel_2 li{ background:#29383A; float:left; width:170px;	text-align:left; border-bottom:1px  dotted #666; border-right:none;	margin:0; z-index:50;}
            div#nav ul.nivel_2 li a{height:25px; line-height:25px; margin-left:5px; z-index:50;}

            div#nav ul.nivel_2 li:hover{background:#900; z-index:50;}
            div#nav li.submenu{height:25px; z-index:50;}
            div#nav ul.nivel_2 li.submenu:hover{background:#900 url(http://www.cinemark.com.br/themes/cinemark/seta.png) no-repeat center right; z-index:50;}
            
            
            
        </style>
        
    </head>
    <body>
        <?php
            include 'Moldura.php';
            
            iniciarPagina();
        ?>
        
        <h1> Bem vindo! </h1>
        
        <h4>
            Esse é o site da Empresa Ação Missionária
        </h4>
        
        <div id="nav">
            <ul class="nivel_1">
                <li> Item 01
                    <ul class="nivel_2">
                        <li>Item 01.1</li>
                        <li>Item 01.2</li>
                        <li>Item 01.3</li>
                        <li>Item 01.4</li>
                    </ul>
                </li>
                <li> Item 02
                    <ul class="nivel_2">
                        <li>Item 02.1</li>
                        <li>Item 02.2</li>
                        <li>Item 02.3</li>
                        <li>Item 02.4</li>
                    </ul>
                </li>
                <li> Item 03
                    <ul class="nivel_2">
                        <li>Item 03.1</li>
                        <li>Item 03.2</li>
                        <li>Item 03.3</li>
                        <li>Item 03.4</li>
                    </ul>
                </li>
            </ul>
        </div>
        
        <?php
            encerrarPagina();
        ?>
        
    </body>
</html>
