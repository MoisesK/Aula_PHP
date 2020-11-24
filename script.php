<?php

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

//print_r($categorias);
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo "*Campo Obrigatório*";
    return;
}

if(strlen($nome) < 3)
{
    echo 'O nome deve conter mais que 3 caracteres!';
    return;
}

if(strlen($nome) > 40)
{
    echo 'O nome é muito extenso!';
    return;
}

if(!is_numeric($idade))
{
    echo 'A idade deve ser númerica!';
    return;
}

if(strlen($idade) > 2)
{
    echo 'Se você possui ',$idade,' anos não deveria está em casa descansando?';
    return;
}



if($idade <= 5){
    echo "o nadador ",$nome," é muito novo para competir.";
}else

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    if($categorias[$i] == "infantil")
        echo "o nadador ",$nome," compete na categoria infantil!";
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    if($categorias[$i] == "adolescente")
        echo "o nadador ",$nome," compete na categoria adolescente!";
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    if($categorias[$i] == "adulto")
        echo "o nadador ",$nome," compete na categoria adulto!";
}
