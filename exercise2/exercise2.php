<?php

//2. Grąžinkite visų skaičių, esančių $numbers masyve, sandaugą (1 balas)

$numbers = [
    [1, 3, 5],
    [55, 87, 100],
    [12],
    [],
];


function multiplyArray($numbers){
    foreach ($numbers as $array){
       $result = isset($result) ? $result * array_product($array) : array_product($array);
    }
    return $result ?? 0;
 }

 echo "The multiplied array is equal to " . multiplyArray($numbers);

// KITAS BUDAS del saves
// $multiply = 1;
//     foreach ($numbers as $multiplied){
//         foreach ($multiplied as $num){
//             if (isset($num)){
//                 $multiply *= $num;
//             }
//         }
//     }

// echo "The multiplied array is equal to " . $multiply;

