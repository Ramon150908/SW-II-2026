<?php


    $json_str = '{"nome": "Jack Sparrow", "idade": 38, "sexo": "M"}';

    //faz o parsing
    $obj = json_decode($json_str);

    echo "<pre>";
    var_dump($obj);
    echo "</pre>";

    echo "<hr>";

    //imprime o conteudo do objeto
    echo "nome: $obj->nome <br>";
    echo "idade: $obj->idade <br>";
    echo "sexo: $obj->sexo <br>";
?>