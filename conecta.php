<?php

$endereco = 'localhost';
$usuario = 'root';
$senha = 'senac';
$banco = 'academiaforte';

$link = mysqli_connect($endereco,$usuario,$senha,$banco)
or die('Erro: '.mysqli_error($link));

$sql = "INSERT INTO cadastro VALUES";
$sql .= "(null,";
$sql .= "'".$_POST['nome']."',";
$sql .= "'".$_POST['cpf']."',";
$sql .= "'".$_POST['nascimento']."',";
$sql .= "'".$_POST['tel']."',";
$sql .= "'".$_POST['email']."',";
$sql .= "'".$_POST['senha']."',";
$sql .= "'".$_POST['sexo']."',";
$sql .= "'".$_POST['estado']."',";
$sql .= "'".$_POST['cep']."')";

$consulta = mysqli_query($link,$sql);

if(!$consulta)
{
    die('Erro: '.mysqli_error($link));
}
else
{
    echo 'Matricula efetuada com sucesso !';
}

?>