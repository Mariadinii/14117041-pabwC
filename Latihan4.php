<?php
    for($i = 1; $i <= 37; $i++){
        $count = 0;
        for($j = 1; $j <= $i; $j++){
            if($i % $j == 0){
                $count++;
            }
        }
    if($count == 2){
        echo "$i ";
        }    
    }
    echo "adalah bilangan prima dari 1-37"
?>