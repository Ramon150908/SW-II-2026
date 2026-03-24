<?php
    //Função com parâmetros e sem retorno
    function calculo_quadrado($a){
        $x = $a * $a ;
        echo "$x <br>";

    }
    calculo_quadrado(6);
    echo "<hr>";

    function soma($b,$c){
        $soma = $b + $c;
        echo "A soma é: $soma <br>";
    }
    soma(13,34);

    $num1 = 21;
    $num2 = 17;

    soma($num1,$num2);



?>