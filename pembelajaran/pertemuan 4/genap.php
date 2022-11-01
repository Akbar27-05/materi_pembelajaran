<?php 
    for ($i=2; $i <= 100 ; $i++) { 
        $a = 0;
        for ($j=0; $j < $i; $j++) { 
            if ($i % $j == 0) {
                $a++;
            }
        }
        if ($a == 2) {
            echo $i.' ';
        }
    }
?>