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
        include("util/VetorLista.php");
        
        
        $lista = new VetorLista();
        $lista->adicionar(1);
        $lista->adicionar(2);
        
        
        $lista->reverter();
        
        echo "Lista:";
        echo "<br> Tamanho: ", $lista->tamanho();
        echo "<br> getElementoNoIndex(0): ", $lista->getElementoNoIndex(0);
        echo "<br> getElementoNoIndex(1): ", $lista->getElementoNoIndex(1);
        echo "<br> contemElemento(0): ", $lista->contemElemento(0);
        echo "<br> contemElemento(1): ", $lista->contemElemento(1);
        echo "<br> contemElemento(2): ", $lista->contemElemento(2);
        echo "<br> contemIndex(0): ", $lista->contemIndex(0);
        echo "<br> contemIndex(1): ", $lista->contemIndex(1);
        echo "<br> contemIndex(2): ", $lista->contemIndex(2);
        echo "<br> getElementoNoIndex(1): ", $lista->getIndexDoElemento(1);
        echo "<br> getElementoNoIndex(2): ", $lista->getIndexDoElemento(2);
        try{
            echo "<br> getElementoNoIndex(3): ", $lista->getIndexDoElemento(3);
        }  catch (Exception $e){
            echo $e->getMessage();
        }
        echo "<br> remover(0): ", $lista->remover(0);
        echo "<br> remover(1): ", $lista->remover(1);
        try{
            echo "<br> remover(2): ", $lista->remover(2);
        }  catch (Exception $e){
            echo $e->getMessage();
        }
        
        echo "<br><br>";
        
        $pessoa = new Pessoa("Luciano", "M", "03635672165");
        
        echo "Dados da Pessoa:";
        echo "<br> Nome: ", $pessoa->getNome();
        echo "<br> Sexo: ", $pessoa->getSexo();
        echo "<br> CPF: ", $pessoa->getCpf();
        
        echo "<br><br>";
        echo "Vetor: ";
        
        $vetor = array(1, 2, 3);
        echo $vetor[1], "<br>";
        echo $vetor[0], "<br>";
        
        echo "<br>";
        
        echo ControlePessoa::NOME;
        
        
        
        
        
        ?>
    </body>
</html>
