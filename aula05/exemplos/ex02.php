<?php

    //string json (array contendo 3 elementos)
    $json_str = '
        {"empregados": 
            [
                {"nome": "Jack Sparrow", "idade": 38, "sexo": "M"},
                {"nome": "Cleber Gleidson", "idade": 26, "sexo": "M"},
                {"nome": "Maria José", "idade": 39, "sexo": "F"}
            ]
        }';

        //faz o parsing(a decodificação) da string, criando o array "empregados"
    $jsonObj = json_decode($json_str);
    echo"<hr>";
    echo "<pre>";
    var_dump($jsonObj);
    echo "</pre>";
    echo"<hr>";

    $empregados = $jsonObj->empregados;

    echo"<hr>";
    echo "<pre>";
    var_dump($empregados);
    echo "</pre>";
    echo"<hr>";
    echo "<hr>";

    //navega pelos elementos do array, imprimindo cada empregado
    foreach ($empregados as $e){
        echo "nome: $e->nome - idade: $e->idade - sexo: $e->sexo <br>";
    }
    echo "<hr>";
?>