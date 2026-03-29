<?php
    function fatorial($num){
        $resultado = 1;
        if ($num < 0) {
            echo "Número Inválido! <hr>";
        }else {
            for ($i=1; $i <= $num ; $i++) { 
            $resultado *= $i;
            echo "$resultado <br>";
        }
        echo "O fatorial de $num é: $resultado";
        echo "<hr>";
        return $resultado;
        }
        

        
        

    }
    fatorial(6);
    fatorial(0);
    fatorial(1);
    fatorial(-2);
    fatorial(10);



?>