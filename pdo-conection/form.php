<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
    <style>
        body{
            background-color: lavender;
        }
        input{
            width: 250px;
            background-color: white;
            height: 25px;
        }
    </style>
</head>
<body>
    <header>
        <p id="titulo"> Página do Aluno </p> 
        <div class="faixa"> CADASTRO </div> <br>
    </header>
<div class="main">
    <form action="dados.php" method="post">
        <b>Nome: </b>  <input type="text" name="aluno" placeholder="digite seu nome"/><br><br>
        <b>Turma: </b> <input type="text" name="turma" placeholder="digite sua turma"/><br> <br>
        <b>Curso: </b>  <input type="text" name="curso" placeholder="digite seu curso"/> <br><br>
        <b>Endereço: </b> <input type="text" name="endereco" placeholder="digite seu endereço"/> <br><br>
        <b>Matricula: </b> <input type="text" name="matricula" placeholder="digite sua matricula"/> <br><br>
       <input type="submit" value="Enviar!" />
    </form>
    </div>
</body>
</html>

