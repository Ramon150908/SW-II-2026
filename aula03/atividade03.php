<?php
    function par_ou_impar($num){
        $determinar = $num % 2;
        if ($determinar == 0) {
            echo "O número $num é par! <br>";
        } else {
            echo "O número $num é ímpar! <br>";
        }
    }
    par_ou_impar(4);
    par_ou_impar(5);
    par_ou_impar(18);


?>