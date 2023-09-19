<?php
function printEvenNumbers($start, $end, $step){
    //Using For Loop
    echo "Using for loop: ";
    for ($i = $start; $i <= $end; $i += $step){
        echo ($i +1 ) ." ";
    }
    echo "<br>";
    echo "Using while loop: ";
    $j = $start;
    while ($j <= $end){
        echo ($j +1 ) ." ";
        $j += $step;
    }
    echo "<br>";
    echo "Using do while loop: ";
    $k = $start;
    do{
        echo ($k +1 ) ." ";
        $k += $step;
    }while($k <= $end);
}

//Function Calling
printEvenNumbers(1, 20, 2);