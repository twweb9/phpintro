<?php

$category = [];
$category[] = 'Infantil';
$category[] = 'Juvenil';
$category[] = 'Amador';

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade = $_POST['idade'];

if(empty($nome) && empty($sobrenome)){
    echo 'Nome não pode estar vazio';
    return
}
if(strlen($nome)< 3 && strlen($sobrenome)< 3){
    echo 'O nome deve ter mair que 3 caracteres';
    return;
}
if(strlen($nome)< 50 && strlen($sobrenome)< 50){
    echo 'O nome ultrapassou a quantidade maxima de caracteres';
    return;
}
if(!is_numeric ($idade)){
    echo 'O valor digitado não é numeral';
    return;
}

if($idade <= 12){
    echo 'Infantil';
}else if($idade >= 13 && $idade <= 18){
    echo 'Juvenil';
}else {
    echo 'Amador';
}

?>
<html>
<p><input type="submit" name="Voltar" /> </p>