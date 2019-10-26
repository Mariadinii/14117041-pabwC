<?php
    function swap(&$value1, &$value2){
        $temp = $value1;
        $value1 =  $value2;
        $value2 = $temp;
    }
    $value1 = 35;
    $value2 = 46;
    echo "Nilai Awal : <br>";
    echo "value 1 = $value1 <br>";
    echo "value 2 = $value2 <br>";
    echo "Swap Pertama <br>";
    swap($value1,$value2);
    echo "value 1 = $value1 <br>"; 
    echo "value 2 = $value2 <br>";
    echo "Swap Kedua <br>";
    swap($value1,$value2);
    echo "value 1 = $value1 <br>";
    echo "value 2 = $value2";
    echo "<br>";
?>