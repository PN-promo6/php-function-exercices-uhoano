<?php

function SumAll($number)
{
    $total = 0;
    for ($i = 0; $i <= $number; $i++) {
        $total = $total + $i;
    }
    return $total;
}

echo SumAll(100000);
