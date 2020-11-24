<?php

session_start();

$categorias = [];
$categorias[] = "infantil";
$categorias[] = "adolescente";
$categorias[] = "adulto";

//print_r($categorias);
$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    $_SESSION['mensagem-de-erro'] = "O nome não pode ficar vazio, por favor preencha-o!";
    header('location: index.php');
    return;
}
else if(strlen($nome) < 3)
{
    $_SESSION['mensagem-de-erro'] = "O nome deve conter mais que 3 caracteres!";
    header('location: index.php');
    return;
}
else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = "O nome é muito extenso!";
    header('location: index.php');   
    return;
}
else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = "Informe um valor numérico para idade!";
    header('location: index.php');
    return;
}
else if(strlen($idade) > 2)
{
    $_SESSION['mensagem-de-erro'] = "Se você possui $idade anos não deveria está em casa descansando?";
    header('location: index.php');
    return;
}


if($idade <= 5){
    $_SESSION['mensagem-de-sucesso'] = "o nadador $nome é muito novo para competir.";
    header('location: index.php');
} 

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    if($categorias[$i] == "infantil")
    {
        $_SESSION['mensagem-de-sucesso'] = "o nadador $nome compete na categoria infantil!";
        header('location: index.php');
        return;
    }
    
}
else if($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    if($categorias[$i] == "adolescente")
    {
        $_SESSION['mensagem-de-sucesso'] = "o nadador $nome compete na categoria adolescente!";
        header('location: index.php');
        return;
    }
}
else
{
    for($i = 0; $i <= count($categorias); $i++)
    if($categorias[$i] == "adulto")
    {
        $_SESSION['mensagem-de-sucesso'] = "o nadador $nome compete na categoria adulto!";
        header('location: index.php');
        return;
    }
}
