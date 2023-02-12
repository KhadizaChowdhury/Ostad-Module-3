<?php
// 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
// 2. 1+2+3...…….100  Write a loop to calculate the summation of the series

// Solve 1
function isEven(int $n)
{
    if($n % 2 == 0){
        return "Even number.";
    }
    else{
        return "Odd number.";
    }
}

$x= 14;
echo "$x is an ".isEven($x);

// Solve 2
$sum = 0;
for ($i=1; $i<=100; $i++){
    $sum += $i;
}
echo "\nThe summation of the series 1 to 100 is : {$sum}";
