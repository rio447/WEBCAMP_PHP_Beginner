<?php
// 関数の作成

    $n = 22;
    $a = 1;
    $b = 0;

    for ($i = 0; $i < $n; $i++) {
        $temp = $a;
        $a = $b;
        $b = $temp + $b;
        echo $a . "\n";
    }
