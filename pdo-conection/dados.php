<?php

$nome=$_POST['aluno'];
$turma=$_POST['turma'];
$curso=$_POST['curso'];
$endereco=$_POST['endereco'];
$matricula=$_POST['matricula'];
require_once('conexao.php');

$sql="INSERT INTO Aluno (nome, turma,curso, endereco, matricula) VALUES  ('$nome', '$turma', '$curso', '$endereco', '$matricula')";

$stmt = $conexao ->prepare($sql);

if($stmt->execute()){
    echo "O(a) Aluno(a) $nome, foi incluido com sucesso no banco de dados!!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: plum;
        }
    </style>
</head>
<body>
    
</body>
</html>