<?php
    $produtos = [
    [
        "produto"=>"teclado",
        "preco"=> 52,
        "estoque"=> 15
    ],
    [
        "produto"=>"mouse",
        "preco"=> 32,
        "estoque"=> 12
    ],
    [
        "produto"=> "monitor",
        "preco"=> 79,
        "estoque"=> 35
    ]];

    $json = json_encode($produtos,JSON_PRETTY_PRINT);
    file_put_contents("produtos.json", $json);



    $conteudo = file_get_contents("produtos.json");
    $dados = json_decode($conteudo, true);
    print_r($dados);
    echo "<hr>";

    $produtos["produto"] = "controle";
    $produtos["preco"] = 210;
    $produtos["estoque"] = 33;

    print_r($produtos);

    $json = json_encode($produtos,JSON_PRETTY_PRINT);
    file_put_contents("produtos.json", $json);

?>