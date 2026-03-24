<?php
    //Trabalhando com ARRAYS
    function mostrar_array($vetor){
        foreach ($vetor as $valor) {
            echo $valor . "<br>";
        }
        echo"<hr>";
       }


    $numeros = [1,2,3,4,5];
    $numeros2 = [12,23,34,45,56,67,78,89,90];
    $nomes = ["Cleiton","Cleber","Claudio"];

    mostrar_array($numeros);
    mostrar_array($numeros2);
    mostrar_array($nomes);


?>