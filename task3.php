<?php
//Break on Condition
$veryOld = 0;
$old = 1;
$new = 1;
for ($i = 1; $i <= 10; $i++){
    if ($veryOld > 100){
        break;
    }
    echo $veryOld. ' ';
    $old = $new;
    $new = $old + $veryOld;
    $veryOld = $old;
}