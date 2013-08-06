<?php

//Example of array_diff = lists the difference between 2 arrays.

$array1 =array('red','yellow','green','blue');
$array2 =array('green','yellow','blue');

$result = array_diff($array1, $array2);
print_r($result);


//Example of array_combine = combines 2 arrays, making one the keys and matching them to their corresponding values found in the second array

$names = array('Mike','Joe','Stan');
$age = array('30','25','32'); 

$results = array_combine($names, $age);
print_r($results);


//Example of array_merge = merges 2 arrays into 1.

$a1 = array('blue','yellow','green');
$a2 = array('red','orange','purple');

$combine = array_merge($a1, $a2);
print_r($combine);


//Example of array_flip = flips keys with their respective values.

$states = array('NY' => 'New York', 'NJ' => 'New Jersey', 'PA' => 'Pennsylvania');

$flipped = array_flip($states);
print_r($flipped);


//Example of array_pop = deletes the last element of an array.

$people = array('Norm','Jack','John');

array_pop($people);
print_r($people);


//Example of array_push = adds extra elements to the end of an array.

$colors = array('red','blue');

array_push($colors, 'green','yellow');
print_r($colors);

?>
