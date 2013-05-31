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
        include("util/Vector.php");
        
        
        echo "Testando Vetor<br>";
        
        $vetor = new Vector();
        echo "O Vetor foi criado<br>";
        
        $vetor->push_back(2);
        echo "adicionarNoFinal(2)<br>";
        $vetor->push_back(3);
        echo "adicionarNoFinal(3)<br>";
        $vetor->push_back(9);
        echo "adicionarNoFinal(9)<br>";
        $vetor->push_back(5);
        echo "adicionarNoFinal(5)<br>";
        
        $vetor->push_front(11);
        echo "adicionarNoInicio(11)<br>";
        $vetor->push_front(15);
        echo "adicionarNoInicio(15)<br>";
        $vetor->push_front(13);
        echo "adicionarNoInicio(13)<br>";
        
        $vetor->push_front("Luciano");
        echo "adicionarNoInicio(\"Luciano\")<br>";
        
        $vetor->set(5, "Flavio");
        echo "vetor->set(5, \"Flavio\")<br>";
        
        $vetor->push(2, "Eu");
        echo "vetor->push(2, \"Eu\")<br>";
        
        
        
        echo "Tamanho: ", $vetor->size(), "<br>";
        
        echo "Vetor: ", $vetor->printValues(), "<br>";
        
        $vetor->reverseOrder();
        echo "reverter()<br>";
        
        echo "Vetor: ", $vetor->toString(), "<br>";
        
        
        
        ?>
    </body>
</html>
