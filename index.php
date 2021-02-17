<?php

$category = [];
$category[] = 'Infantil';
$category[] = 'Juvenil';
$category[] = 'Amador';

$nome = 'Tel';
$idade = 12;

if($idade <= 12){
    echo 'Infantil';
}else if($idade >= 13 && $idade <= 18){
    echo 'Juvenil';
}else {
    echo 'Amador';
}

?>