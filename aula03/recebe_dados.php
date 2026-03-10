<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receptor</title>
</head>
<body>
    <?php
        //$nome = $_POST['nome'];
        $nome = htmlspecialchars($_POST['nome']);
        $email = $_POST['email'];
        $idade = $_POST['idade']; 
        $ano_atual = date('Y');
        $ano = $ano_atual-$idade;
        echo $ano_atual;
    ?>
    <p>O nome é: <?php echo $nome; ?></p>
    <p>O email é <?php echo $email; ?></p>
    <p>A sua idade é: <?php echo $idade; ?></p>
    <p>Então você nasceu em <?php echo $ano; ?></p>
    <?php
    if ($idade >0) {
        if ($idade >= 18) {
        echo "<p style= 'color:red'>Você ja é maior de idade!<p>";
    } else{
        echo "<p style= 'color:blue'>Você ainda é menor de idade.<p>";
    }
    } else {
        echo "<p style = 'color: yellow'>Número inválido!!!<p>";
    }
    
    
    ?>
</body>
</html>