<?php
    function tabuada($num){
        for ($i=0; $i < 11; $i++) { 
            $resul = $num * $i ;
            echo "$num X $i = $resul <br>";
        }
        echo"<hr>";
    }
        
    tabuada(4);
    tabuada(5);
    tabuada(18);


?>