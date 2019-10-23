<?php
    function faktorial($value){
        $hasil=1;
        for($i=$value; $i>0; $i--){
            $hasil = $hasil*$i;
        }
        $value = $hasil;
    }
    $x = 0;
    faktorial($x);
    echo $x;
?>