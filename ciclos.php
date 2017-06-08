<?php

// for
for($i = 0; $i <= 10; $i++){
    echo $i . '<br>';
}

// while

$i = 0;
while($i <= 10){
    echo $i . '<br>';
    $i++;
}

// do-while
do{
    echo $i .'<br>';
    $i++;
}while($i <= 10);

// for each recorre listas o arreglos
$names = ['Mynor', 'Andres', 'Juan'];
foreach($names as $name){
    echo $name . '<br>';
}

foreach($names as $key => $name){
    echo $key . ' - ' . $name . '<br>';
}
