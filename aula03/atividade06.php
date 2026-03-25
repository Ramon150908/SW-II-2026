<?php
    function random(){
        $num = [];
        for ($i=0; $i < 10; $i++) { 
            $num = rand(1,1000);
            echo "$num <br>";
        }
        return $num;
    }
    random();
?>