<?php
    function total($nums){
        $resul = 0;
        foreach ($nums as $num ) {
            $resul += $num;
            echo "$resul <br>";
        }

        return $resul;
    }
        
        $teste1 =[2,6,8,16];
        $teste2 = [4,8,12];

        total($teste2);

?>