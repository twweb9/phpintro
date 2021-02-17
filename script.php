<?php

$category = [];
$category[] = 'Infantil';
$category[] = 'Juvenil';
$category[] = 'Amador';

$nome = $_POST['nome'];
$idade = $_POST['idade'];



if($idade <= 12){
    echo 'Infantil';
}else if($idade >= 13 && $idade <= 18){
    echo 'Juvenil';
}else {
    echo 'Amador';
}

?>