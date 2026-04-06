<?php
    //cria p array associativo
    $idades = ['Chris'=>46, 'Ada'=>47, 'Leon'=> 51];

    //converte o conteudo do array associativo para uma string JSON
    $json_str = json_encode($idades);

    //imprime a string JSON
    echo "$json_str";
?>