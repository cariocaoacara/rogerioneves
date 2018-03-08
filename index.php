<!DOCTYPE html>
<!--
Autor: Rogério Neves
Data:08-03-2018
Finalidade: Projeto de aprendizado PHP
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula03</title>
    </head>
    <body>
        <?php
        # Quando queremos definir uma váriavel devemos ultilizar o simbolo $
        $variavel = "Variavel Exemplo";

        #Porém, quando queremos definir uma váriavel de váriavel ultilizando o simbolo
        $$variavel = 8;

        echo "o Valor da $variavel e " . $$Variavel;
        echo "<br>O valor da $variavel é {$$varaivel}";
        var_dump(boolval(0));
        echo "<br>";
         var_dump(boolval(1));
        
        ?>
    </body>
</html>
