<?php

$color = 'black';
// if
if($color == 'black'){
    echo 'Color is black';
}elseif($color == 'white'){
    echo 'Color is white';
}else{
    echo 'Color ...';
}

// switch
switch($color){
    case 'blue':
        echo 'Color is blue';
        break;
    case 'red':
        echo 'Color is red';
        break;
    default: 
        echo 'Other';
        break;
}
