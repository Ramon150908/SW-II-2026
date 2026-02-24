<?php
    echo "Soma, If e Else <br><br>";

    $v1 = 20;
    $v2 = 18;

    $soma = $v1 + $v2;

    echo "O resultado é: ". $soma ."<br>";
    echo "A variável A é: ";
    var_dump($v1);
    echo "<br>";
    echo "A variável B é: ";
    var_dump($v2);
    echo "<br>";
    
    if ($v1 == $v2) {
        //echo "A variável A é maior que a B";
        echo "A é igual a B";
    }else {
        //echo "A variável A não é maior do que a B";
        echo "A e B são diferentes";
    };
    echo "<hr>";

    $aluno = "Juninho";
    $n1 = 4;
    $n2 = 5;
    $n3 = 6;
    $media = ($n1 + $n2 + $n3)/3;
    echo "A media do aluno é ".$media.", portanto, ";
    //echo "<hr>";
    if ($media > 5) {
        echo "o aluno ". $aluno. " está aprovado!";
    }else{
        if ($media < 4) {
            echo $aluno. " está reprovado!";}
        else{
            echo $aluno. " está de recuperação!";}
    }
    echo "<hr>";

    echo "Switch <br><br>";

    $dia = 1;
    switch ($dia) {
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda-Feira";
            break;
        case 3:
            echo "Terça-Feira";
            break;
        case 4:
            echo "Quarta-Feira";
            break;
        case 5:
            echo "Quinta-Feira";
            break;
        case 6:
            echo "Sexta-Feira";
            break;
        case 7:
            echo "Sábado";
            break;     
    };
    echo "<hr>";

    echo"For, While e Do While<br><br>";
    
    for ($i=1; $i < 11; $i++) { 
        echo "$i - ";
    };
    echo "<Br>";

    $a = 1;
    while ($a <= 10) {
        echo "$a - ";
        $a++;
    };
    echo "<Br>";

    $b = 1;
    do {
        echo "$b - ";
        $b++;
    } while ($b <= 10);
    echo "<hr>";

    $nomes = ["Cleiton","Juninho","Cleber"];
    //echo "$nomes"
    foreach ($nomes as $nome) {
        echo "O nome é: $nome <br>";
    };
    echo "<hr>";
?>