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
        include("model/Pessoa.php");
        include("control/ControlePessoa.php");
        include("util/Vetor.php");
        
        
        echo "Testando Vetor<br>";
        
        $vetor = new Vetor();
        echo "O Vetor foi criado<br>";
        
        $vetor->adicionarNoFinal(2);
        echo "adicionarNoFinal(2)<br>";
        $vetor->adicionarNoFinal(3);
        echo "adicionarNoFinal(3)<br>";
        $vetor->adicionarNoFinal(9);
        echo "adicionarNoFinal(9)<br>";
        $vetor->adicionarNoFinal(5);
        echo "adicionarNoFinal(5)<br>";
        
        $vetor->adicionarNoInicio(11);
        echo "adicionarNoInicio(11)<br>";
        $vetor->adicionarNoInicio(15);
        echo "adicionarNoInicio(15)<br>";
        $vetor->adicionarNoInicio(13);
        echo "adicionarNoInicio(13)<br>";
        
        $vetor->adicionarNoInicio("Luciano");
        echo "adicionarNoInicio(\"Luciano\")<br>";
        
        
        
        echo "Tamanho: ", $vetor->tamanho(), "<br>";
        
        echo "Vetor: ", $vetor->imprimir(), "<br>";
        
        $vetor->reverter();
        echo "reverter()<br>";
        
        echo "Vetor: ", $vetor->imprimir(), "<br>";
        
        
        
        ?>
    </body>
</html>
