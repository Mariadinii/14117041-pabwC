<?php
    $data = ["lanirne","aduh","qifuat","toda","anevi","samid","kifuad"];
    sort($data);
    echo "(";
    for($i=0; $i<count($data)-1; $i++){
        echo "\"$data[$i]\", ";
    }
    echo " \"$data[$i]\" )";
?>